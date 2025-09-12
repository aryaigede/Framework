<?php
session_start();

require_once 'koneksi.php';
require_once 'role.php';

if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}

// Proses hapus role user
if (isset($_GET['hapus_role_user']) && isset($_GET['iduser']) && isset($_GET['idrole'])) {
    $iduser = $_GET['iduser'];
    $idrole = $_GET['idrole'];
    
    $sql = "DELETE FROM role_user WHERE iduser = ? AND idrole = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $iduser, $idrole);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Role user berhasil dihapus!";
    } else {
        $_SESSION['error'] = "Gagal menghapus role user!";
    }
    
    header("Location: ManajemenRole.php");
    exit();
}

// Proses tambah role user
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah_role_user'])) {
    $iduser = $_POST['iduser'];
    $idrole = $_POST['idrole'];
    $status = $_POST['status'];

    // Cek apakah user sudah memiliki role tersebut
    $check_sql = "SELECT * FROM role_user WHERE iduser = ? AND idrole = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ii", $iduser, $idrole);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        $_SESSION['error'] = "User sudah memiliki role tersebut!";
    } else {
        $sql = "INSERT INTO role_user (iduser, idrole, status) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $iduser, $idrole, $status);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Role berhasil ditambahkan!";
        } else {
            $_SESSION['error'] = "Gagal menambah role!";
        }
    }
    
    header("Location: ManajemenRole.php");
    exit();
}

// Query untuk mengambil data user beserta role
$sqlRoleUser = "SELECT u.iduser, u.nama, u.email,
    GROUP_CONCAT(
        CONCAT(
            r.nama_role, 
            ' (', 
            IF(ru.status=1,'Aktif','Non-Aktif'), 
            ') <a href=\"ManajemenRole.php?hapus_role_user=1&iduser=', u.iduser, '&idrole=', r.idrole, '\" onclick=\"return confirm(\'Hapus role ini?\')\" style=\"color:red;text-decoration:none;\">[Hapus]</a>'
        ) 
        SEPARATOR '<br>'
    ) AS roles
FROM user u
LEFT JOIN role_user ru ON u.iduser = ru.iduser
LEFT JOIN role r ON ru.idrole = r.idrole
GROUP BY u.iduser, u.nama, u.email
ORDER BY u.nama";
$resultRoleUser = $conn->query($sqlRoleUser);

// Ambil daftar user untuk dropdown
$userSql = "SELECT iduser, nama FROM user ORDER BY nama";
$userResult = $conn->query($userSql);

// Ambil daftar role untuk dropdown
$roles = Role::all();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Role - Rumah Sakit Hewan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .form-section {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        select, input {
            width: 300px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .back-btn {
            background-color: #6c757d;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .back-btn:hover {
            background-color: #545b62;
        }
    </style>
</head>

<body>
    <?php include 'Navbar.php'; ?>
    
    <div class="container">
        <a href="admin.php" class="back-btn">← Kembali ke Dashboard</a>
        
        <h1>Manajemen Role User</h1>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <!-- Form Tambah Role User -->
        <div class="form-section">
            <h3>Tambah Role untuk User</h3>
            <form method="post">
                <input type="hidden" name="tambah_role_user" value="1">
                
                <div class="form-group">
                    <label for="iduser">Pilih User:</label>
                    <select name="iduser" id="iduser" required>
                        <option value="">-- Pilih User --</option>
                        <?php while ($user = $userResult->fetch_assoc()): ?>
                            <option value="<?php echo $user['iduser']; ?>">
                                <?php echo htmlspecialchars($user['nama']); ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="idrole">Pilih Role:</label>
                    <select name="idrole" id="idrole" required>
                        <option value="">-- Pilih Role --</option>
                        <?php foreach ($roles as $role): ?>
                            <option value="<?php echo $role['idrole']; ?>">
                                <?php echo htmlspecialchars($role['nama_role']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" required>
                        <option value="1">Aktif</option>
                        <option value="0">Non-Aktif</option>
                    </select>
                </div>
                
                <button type="submit">Tambah Role</button>
            </form>
        </div>

        <!-- Tabel Role User -->
        <h3>Daftar User dan Role</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultRoleUser->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['iduser']; ?></td>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo $row['roles'] ? $row['roles'] : '-'; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>