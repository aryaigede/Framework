<?php
require_once 'koneksi.php';

class User {
    public static function create($nama, $email, $password) {
        global $conn;
        $sql = "INSERT INTO user (nama,email,password) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nama, $email, $password);
        return $stmt->execute();
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM user ORDER BY nama");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function update($iduser, $nama, $email, $password) {
        global $conn;
        $sql = "UPDATE user SET nama=?, email=?, password=? WHERE iduser=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nama, $email, $password, $iduser);
        return $stmt->execute();
    }

    public static function delete($iduser) {
        global $conn;
        $conn->query("DELETE FROM role_user WHERE iduser=$iduser"); // hapus relasi dulu
        return $conn->query("DELETE FROM user WHERE iduser=$iduser");
    }

    // === Role Management ===
    public static function attachRole($iduser, $idrole, $aktif=false) {
        global $conn;
        if ($aktif) {
            $conn->query("UPDATE role_user SET status=0 WHERE iduser=$iduser");
        }
        $status = $aktif ? 1 : 0;
        $sql = "INSERT INTO role_user (iduser,idrole,status) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $iduser, $idrole, $status);
        return $stmt->execute();
    }

    public static function setActiveRole($iduser, $idrole) {
        global $conn;
        $conn->query("UPDATE role_user SET status=0 WHERE iduser=$iduser");
        $sql = "UPDATE role_user SET status=1 WHERE iduser=? AND idrole=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $iduser, $idrole);
        return $stmt->execute();
    }

    public static function roles($iduser) {
        global $conn;
        $sql = "SELECT r.idrole, r.nama_role, ru.status
                FROM role_user ru 
                JOIN role r ON r.idrole=ru.idrole
                WHERE ru.iduser=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $iduser);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function activeRole($iduser) {
        global $conn;
        $sql = "SELECT r.idrole, r.nama_role 
                FROM role_user ru 
                JOIN role r ON r.idrole=ru.idrole
                WHERE ru.iduser=? AND ru.status=1 LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $iduser);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>
