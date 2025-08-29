<?php
session_start();

// Cek apakah user sudah login
require_once '../koneksi.php';


if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}

$user_id = $_GET['id'];

// Proses update data
if ($_POST) {
    $nama = $_POST['nama'];

    $sql = "UPDATE user SET nama = ? WHERE iduser = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nama, $user_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Data user berhasil diupdate!";
        header("Location: ../DataMaster.php");
        exit();
    } else {
        $error = "Gagal mengupdate data user!";
    }
}

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
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User - Rumah Sakit Hewan</title>
</head>

<body>
    <?php include '../Navbar.php'; ?>

    <h1>Edit User</h1>

    <?php if (isset($error)): ?>
        <div style="color: red; background-color: #ffe6e6; padding: 10px; margin-bottom: 15px;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <table>
            <tr>
                <td>ID User:</td>
                <td><?php echo $user_data['iduser']; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $user_data['email']; ?> (tidak dapat diubah)</td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" value="<?php echo $user_data['nama']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update" style="background-color: #28a745; color: white; padding: 8px 15px; border: none; border-radius: 3px;">
                    <a href="datamaster_user.php" style="background-color: #6c757d; color: white; padding: 8px 15px; text-decoration: none; border-radius: 3px; margin-left: 10px;">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
$conn->close();
?>