<?php
include "../security.php";
include "../../koneksi.php";

$id_produk = $_GET['id'] ?? '';

if ($id_produk == '') {
    header("Location: index.php");
    exit;
}

$sql = "delete from produk where id_produk='$id_produk'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Gagal menghapus data: " . mysqli_error($conn));
}

header("Location: index.php");
exit;
