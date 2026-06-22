<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['ubah'])) {

    $id_produk = $_POST['id_produk'];
    $nama = trim($_POST['nama']);
    $merek = trim($_POST['merek']);
    $id_kategori = $_POST['id_kategori'];
    $gambar_lama = $_POST['gambar_lama'];

    if ($nama == '' || $id_kategori == '') {
        echo "Semua field wajib diisi.";
        exit;
    }

    $gambar = $gambar_lama;

    if (!empty($_FILES['gambar']['name'])) {

        $nama_file = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        $queryKategori = mysqli_query(
            $conn,
            "SELECT * FROM kategori
             WHERE id_kategori='$id_kategori'"
        );

        $kategori = mysqli_fetch_assoc($queryKategori);

        $folder = $kategori['nama_kategori'];

        $folderUpload = "../../img/Produk-img/" . $folder;

        if (!is_dir($folderUpload)) {
            mkdir($folderUpload, 0777, true);
        }

        move_uploaded_file(
            $tmp,
            $folderUpload . "/" . $nama_file
        );

        $gambar = $folder . "/" . $nama_file;
    }

    $sql = "UPDATE produk
            SET nama='$nama',
                merek='$merek',
                gambar='$gambar',
                id_kategori='$id_kategori'
            WHERE id_produk='$id_produk'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit;
}
