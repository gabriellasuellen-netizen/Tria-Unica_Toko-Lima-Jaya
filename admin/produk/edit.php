<?php
include "../security.php";
include "../../koneksi.php";

$id_produk = $_GET['id'] ?? '';

if ($id_produk == '') {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM produk WHERE id_produk='$id_produk'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}

$kategori = mysqli_query(
    $conn,
    "SELECT * FROM kategori ORDER BY nama_kategori ASC"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>

<body>

    <h1>Edit Produk</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <form method="POST" action="ubah.php" enctype="multipart/form-data">

        <input
            type="hidden"
            name="id_produk"
            value="<?= $data['id_produk']; ?>">

        <input
            type="hidden"
            name="gambar_lama"
            value="<?= $data['gambar']; ?>">

        <label>Nama Produk</label><br>
        <input
            type="text"
            name="nama"
            value="<?= htmlspecialchars($data['nama']); ?>">
        <br><br>

        <label>Merek</label><br>
        <input
            type="text"
            name="merek"
            value="<?= htmlspecialchars($data['merek']); ?>">
        <br><br>

        <label>Kategori</label><br>

        <select name="id_kategori">

            <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>

                <option
                    value="<?= $k['id_kategori']; ?>"
                    <?= ($data['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>

                    <?= $k['nama_kategori']; ?>

                </option>

            <?php } ?>

        </select>

        <br><br>

        <label>Gambar Saat Ini</label><br>

        <img
            src="../../img/Produk-img/<?= $data['gambar']; ?>"
            width="120">
        <br><br>

        <label>Ganti Gambar</label><br>

        <input
            type="file"
            name="gambar">

        <br><br>

        <button type="submit" name="ubah">
            Edit
        </button>

    </form>

</body>

</html>