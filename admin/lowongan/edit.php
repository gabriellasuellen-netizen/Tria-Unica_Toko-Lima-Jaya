<?php
include "../security.php";
include "../../koneksi.php";

$id_lowongan = $_GET['id'] ?? '';

if ($id_lowongan == '') {
    header("Location: index.php");
    exit;
}

$sql = "select * from lowongan where id_lowongan='$id_lowongan'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Lowongan</title>
</head>

<body>

    <h1>Edit Lowongan</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <form method="POST" action="ubah.php">
        <input type="hidden" name="id_lowongan" value="<?= $data['id_lowongan']; ?>">

        <label>Posisi</label><br>
        <input type="text" name="nama_lowongan" value="<?= htmlspecialchars($data['nama_lowongan']); ?>">
        <br><br>

        <label>Syarat</label><br>
        <textarea
            name="syarat"
            rows="5"><?= htmlspecialchars($data['syarat']); ?></textarea>
        <br><br>

        <select name="status">
            <option value="Aktif"
                <?= $data['status'] == 'Aktif' ? 'selected' : ''; ?>>
                Aktif
            </option>
            <option value="Tidak Aktif"
                <?= $data['status'] == 'Tidak Aktif' ? 'selected' : ''; ?>>
                Nonaktif
            </option>
        </select>
        <br><br>

        <button type="submit" name="ubah">Edit</button>
    </form>

</body>

</html>