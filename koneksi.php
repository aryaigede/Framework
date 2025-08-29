<?php
$host = 'localhost'; //hostname
$user = 'root'; //user database
$pass = ''; //password database
$db   = 'framework_prak1'; // nama database

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>