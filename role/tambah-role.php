
<?php
require_once '../koneksi.php';
require_once '../role.php';

// Ambil daftar role
$roles = Role::all();
$iduser = isset($_GET['iduser']) ? $_GET['iduser'] : '';

// Proses simpan ke tabel role_user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $iduser = $_POST['iduser'];
    $idrole = $_POST['idrole'];
    $status = $_POST['status'];

    $sql = "INSERT INTO role_user (iduser, idrole, status) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $iduser, $idrole, $status);
    if ($stmt->execute()) {
        echo "<div style='color:green;'>Role berhasil ditambahkan!</div>";
    } else {
        echo "<div style='color:red;'>Gagal menambah role!</div>";
    }
}
?>

    <h2>Tambah Role untuk User</h2>
    <form method="post">
        <input type="hidden" name="iduser" value="<?php echo htmlspecialchars($iduser); ?>">
        <label for="idrole">Pilih Role:</label>
        <select name="idrole" id="idrole" required>
            <option value="">-- Pilih Role --</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?php echo $role['idrole']; ?>"><?php echo htmlspecialchars($role['nama_role']); ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1">Aktif</option>
            <option value="0">Non-Aktif</option>
        </select>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</form>