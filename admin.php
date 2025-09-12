<?php
session_start();

if (!isset($_SESSION["username"])) {
    header( "location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .navbar {
        background: #002366;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* kiri - kanan */
    }

    .navbar-left {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .navbar ul li {
        margin-right: 20px;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    .logout-button {
        color: red;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }
    
    .admin-menu {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 30px 0;
    }
    
    .menu-card {
        background: white;
        border: 2px solid #002366;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        min-width: 200px;
        text-decoration: none;
        color: #002366;
        transition: all 0.3s ease;
    }
    
    .menu-card:hover {
        background: #002366;
        color: white;
        transform: translateY(-5px);
    }
    
    .menu-card h3 {
        margin: 0 0 10px 0;
    }
    
    .menu-card p {
        margin: 0;
        font-size: 14px;
    }
</style>

<body>
   <?php
   include("Navbar.php");
   ?>

    <div class="content">
        <h2>Hai, <?php echo $_SESSION['nama'] ?>!</h2>
        <h3>Selamat datang di halaman admin</h3>
        
        <div class="admin-menu">
            <a href="DataMaster.php" class="menu-card">
                <h3>Data Master</h3>
                <p>Kelola data user dan informasi dasar sistem</p>
            </a>
            
            <a href="ManajemenRole.php" class="menu-card">
                <h3>Manajemen Role</h3>
                <p>Kelola role dan hak akses pengguna</p>
            </a>
        </div>
    </div>
</body>

</html>