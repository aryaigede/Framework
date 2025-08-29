<?php
session_start();

// Cek apakah user sudah login
require_once '../koneksi.php';


if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}


$user_id = $_GET['id'];

// $new_password = "123456";

// Ambil data user untuk ditampilkan di form
$sql = "SELECT * FROM user WHERE iduser = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user_data = $result->fetch_assoc();

if (!$user_data) {
    $_SESSION['message'] = "User tidak ditemukan!";
    header("Location: ../DataMaster.php");
    exit();
}

if ($_POST) {
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];
     if ($password !== $retype_password) {
        $error = "Password dan retype password tidak sama!";
    }else{
        $hashed = password_hash($password, PASSWORD_DEFAULT);
         $sql = "UPDATE user SET password = ? WHERE iduser = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashed, $user_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "password berhasil diupdate!";
        header("Location: ../DataMaster.php");
        exit();
    } else {
        $error = "Gagal mengupdate password!";
    }
    }

   
}

// Update password di database
// $sql = "UPDATE user SET password = ? WHERE iduser = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("si", $new_password, $user_id);

// if ($stmt->execute()) {
//     // Ambil data user untuk notifikasi
//     $sql = "SELECT nama FROM user WHERE iduser = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("i", $user_id);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $user_data = $result->fetch_assoc();
    
//     $_SESSION['message'] = "Password untuk user '" . $user_data['nama'] . "' berhasil direset menjadi: " . $new_password;
// } else {
//     $_SESSION['message'] = "Gagal mereset password!";
// }

// header("Location: datamaster_user.php");
// exit();

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php include '../Navbar.php'; ?>
    
    <h1>Reset Password</h1>
    
    <?php if(isset($error)): ?>
        <div style="color: red; background-color: #ffe6e6; padding: 10px; margin-bottom: 15px;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST">
        <table>
            <tr>
                <td>Nama:</td>
                <td><?php echo $user_data['nama']; ?></td> 
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $user_data['email']; ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
                <td>Retype Password:</td>
                <td><input type="password" name="retype_password" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="reset password" style="background-color: #28a745; color: white; padding: 8px 15px; border: none; border-radius: 3px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>