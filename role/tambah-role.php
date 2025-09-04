
<?php
require_once '../koneksi.php';
require_once '../role.php';


// Ambil daftar role
$roles = Role::all();
$iduser = $_GET['iduser']; // dari link "Tambah Role"

?>
<form method="post">
    <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
    <label>Role:</label>
    <select name="idrole">
        <?php foreach ($roles as $role): ?>
            <option value="<?php echo $role['idrole']; ?>"><?php echo $role['nama_role']; ?></option>
        <?php endforeach; ?>
    </select>
    <label>Status:</label>
    <select name="status">
        <option value="1">Aktif</option>
        <option value="0">Non-Aktif</option>
    </select>
    <button type="submit">Simpan</button>
</form>

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