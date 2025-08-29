<?php
session_start();

// Cek apakah user sudah login

if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}

// Koneksi database
require_once '../koneksi.php';


// Proses tambah user
if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];
    
    // Validasi password
    if ($password !== $retype_password) {
        $error = "Password dan retype password tidak sama!";
    } else {
        // Cek apakah email sudah ada
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error = "Email sudah terdaftar!";
        } else {
            // Insert user baru
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (nama, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nama, $email, $hashedPassword);
            
            if ($stmt->execute()) {
                $_SESSION['message'] = "User baru berhasil ditambahkan!";
                header("Location: ../DataMaster.php");
                exit();
            } else {
                $error = "Gagal menambahkan user baru!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah User - Rumah Sakit Hewan</title>
</head>
<body>
    <?php include '../Navbar.php'; ?>
    
    <h1>Tambah User Baru</h1>
    
    <?php if(isset($error)): ?>
        <div style="color: red; background-color: #ffe6e6; padding: 10px; margin-bottom: 15px;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Retype Password:</td>
                <td><input type="password" name="retype_password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tambah User" style="background-color: #28a745; color: white; padding: 8px 15px; border: none; border-radius: 3px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
$conn->close();
?>