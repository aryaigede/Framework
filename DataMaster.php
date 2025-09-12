<?php
session_start();

require_once 'koneksi.php';

if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}

// Query untuk mengambil data user
$sql = "SELECT * FROM user ORDER BY nama";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data User - Rumah Sakit Hewan</title>
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
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
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
        
        .add-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .add-btn:hover {
            background-color: #0056b3;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
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
        
        .action-link {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        
        .action-link:hover {
            text-decoration: underline;
        }
        
        .danger-link {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <?php include 'Navbar.php'; ?>

    <div class="container">
        <a href="admin.php" class="back-btn">← Kembali ke Dashboard</a>
        
        <h1>Manajemen Data User</h1>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <a href="user/tambahUser.php" class="add-btn">Tambah User</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['iduser']; ?></td>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td>
                            <a href="user/editUser.php?id=<?php echo $row['iduser']; ?>" class="action-link">Edit</a>
                            <a href="user/resetPass.php?id=<?php echo $row['iduser']; ?>" class="action-link danger-link"
                                onclick="return confirm('Apakah Anda yakin ingin reset password user ini?')">Reset Password</a>
                        </td>
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