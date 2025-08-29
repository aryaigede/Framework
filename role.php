<?php
require_once 'koneksi.php';

class Role {
    public static function create($nama_role) {
        global $conn;
        $sql = "INSERT INTO role (nama_role) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nama_role);
        return $stmt->execute();
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM role ORDER BY idrole");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function update($idrole, $nama_role) {
        global $conn;
        $sql = "UPDATE role SET nama_role=? WHERE idrole=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $nama_role, $idrole);
        return $stmt->execute();
    }

    public static function delete($idrole) {
        global $conn;
        $sql = "DELETE FROM role WHERE idrole=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idrole);
        return $stmt->execute();
    }
}
?>
