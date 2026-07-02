<?php
include "../security.php";
include "../../koneksi.php";

$id_users = $_SESSION['id_users'];

if (isset($_POST['simpan'])) {

    $nama = trim($_POST['nama']);
    $merek = trim($_POST['merek']);
    $id_kategori = $_POST['id_kategori'];

    if (
        $nama == '' ||
        $id_kategori == '' ||
        empty($_FILES['gambar']['name'])
    ) {

        $error = "Semua field wajib diisi.";
    } else {

        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        $queryKategori = mysqli_query(
            $conn,
            "SELECT * FROM kategori WHERE id_kategori='$id_kategori'"
        );

        $kategori = mysqli_fetch_assoc($queryKategori);

        $folder = $kategori['nama_kategori'];

        $folderUpload = "../../img/Produk-img/" . $folder;

        if (!is_dir($folderUpload)) {
            mkdir($folderUpload, 0777, true);
        }

        move_uploaded_file(
            $tmp,
            $folderUpload . "/" . $gambar
        );

        $pathDatabase = $folder . "/" . $gambar;

        $sql = "INSERT INTO produk
                (nama, merek, gambar, id_kategori, id_users)
                VALUES
                ('$nama', '$merek', '$pathDatabase', '$id_kategori', '$id_users')";

        $query = mysqli_query($conn, $sql);

        if ($query) {

            header("Location: index.php");
            exit;
        } else {

            $error = "Data gagal disimpan.";
        }
    }
}

$kategori = mysqli_query(
    $conn,
    "SELECT * FROM kategori ORDER BY nama_kategori ASC"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>

    <h1>Tambah Produk</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <?php if (isset($error)) : ?>
        <p style="color:red;">
            <?= $error; ?>
        </p>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">

        <label>Nama Produk</label><br>
        <input type="text" name="nama">
        <br><br>

        <label>Merek</label><br>
        <input type="text" name="merek">
        <br><br>

        <label>Kategori</label><br>
        <select name="id_kategori">

            <option value="">
                -- Pilih Kategori --
            </option>

            <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>

                <option value="<?= $k['id_kategori']; ?>">
                    <?= $k['nama_kategori']; ?>
                </option>

            <?php } ?>

        </select>

        <br><br>

        <label>Gambar</label><br>
        <input type="file" name="gambar">
        <br><br>

        <button type="submit" name="simpan">
            Simpan
        </button>

    </form>

</body>

</html>