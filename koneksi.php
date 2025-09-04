<?php
$host = 'localhost'; //hostname
$user = 'root'; //user database
$pass = ''; //password database
$db   = 'rsph'; // nama database

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>