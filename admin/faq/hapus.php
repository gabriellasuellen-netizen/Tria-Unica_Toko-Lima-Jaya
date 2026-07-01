<?php
include "../security.php";
include "../../koneksi.php";

$id_faq = $_GET['id'] ?? '';

if ($id_faq == '') {
    header("Location: index.php");
    exit;
}

$sql = "delete from faq where id_faq='$id_faq'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Gagal menghapus data: " . mysqli_error($conn));
}

header("Location: index.php");
exit;
