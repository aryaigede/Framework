<?php
session_start();

require_once 'koneksi.php';


if (!isset($_SESSION["username"])) {
    header("location:login.php");
    exit();
}


// Query untuk mengambil data user
// Query untuk mengambil data user
$sql = "SELECT * FROM user ORDER BY nama";
$result = $conn->query($sql);

// Query untuk mengambil data user beserta role
$sqlRoleUser = "SELECT u.iduser, u.nama, GROUP_CONCAT(CONCAT(r.nama_role, ' (', IF(ru.status=1,'Aktif','Non-Aktif'), ')') SEPARATOR '<br>') AS roles
FROM user u
LEFT JOIN role_user ru ON u.iduser = ru.iduser
LEFT JOIN role r ON ru.idrole = r.idrole
GROUP BY u.iduser, u.nama
ORDER BY u.nama";
$resultRoleUser = $conn->query($sqlRoleUser);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data User - Rumah Sakit Hewan</title>
</head>

<body>
    <?php include 'Navbar.php'; ?>


    <h1>Manajemen Data User</h1>

    <?php if (isset($_SESSION['message'])): ?>
        <div style="color: green; background-color: #e6ffe6; padding: 10px; margin-bottom: 15px;">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>

    <div style="margin: 20px 0;">
        <a href="user/tambahUser.PHP" style="background-color: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 3px;">Tambah User</a>
    </div>
    
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f8f9fa;">
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
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="user/editUser.php?id=<?php echo $row['iduser']; ?>"
                            style="color: #007bff; text-decoration: none; margin-right: 10px;">Edit</a>
                        <a href="user/resetPass.PHP?id=<?php echo $row['iduser']; ?>"
                            style="color: #dc3545; text-decoration: none;"
                            onclick="return confirm('Apakah Anda yakin ingin reset password user ini?')">Reset Password</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Manajemen Role User</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f8f9fa;">
                <th>ID</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $resultRoleUser->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['iduser']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['roles'] ? $row['roles'] : '-'; ?></td>
                    <td>
                        <a href="role/tambah-role.php?iduser=<?php echo $row['iduser']; ?>">Tambah Role</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>

<?php
$conn->close();
?>