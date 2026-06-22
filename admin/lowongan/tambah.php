<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $posisi = trim($_POST['posisi']);
    $syarat = trim($_POST['syarat']);
    $status = trim($_POST['status']);

    if ($posisi == '' || $syarat == '' || $status <= 0) {
        $error = "Semua field wajib diisi dengan benar.";
    } else {
        $sql = "insert into lowongan (nama_lowongan, syarat, status) values('$posisi', '$syarat', '$status')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Data gagal disimpan.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Lowongan</title>
    <link rel="stylesheet" href="lowongan.css" />
</head>

<body>

    <h1>Tambah Lowongan</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <?php if (isset($error)) : ?>
        <p style="color:red;"><?= $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Posisi</label><br>
        <input type="text" name="posisi">
        <br><br>

        <label>Syarat</label><br>
        <textarea name="syarat" rows="5"></textarea>
        <br><br>

        <label>Status</label><br>
        <select name="status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Nonaktif</option>
        </select>

        <button type="submit" name="simpan">Simpan</button>
    </form>

</body>

</html>