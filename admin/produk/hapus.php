<?php
include "../security.php";
include "../../koneksi.php";

$id_lowongan = $_GET['id'] ?? '';

if ($id_lowongan == '') {
    header("Location: index.php");
    exit;
}

$sql = "delete from lowongan where id_lowongan='$id_lowongan'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Gagal menghapus data: " . mysqli_error($conn));
}

header("Location: index.php");
exit;
