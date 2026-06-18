<?php
include 'koneksi.php';

$nama = trim($_POST['nama']);
$tanggal_lahir = trim($_POST['tanggal_lahir']);
$alamat = trim($_POST['alamat']);
$telepon = trim($_POST['telepon']);
$email = trim($_POST['email']);
$id_lowongan = trim($_POST['id_lowongan']);
$tentang_diri = trim($_POST['tentang_diri']);


$sql = "INSERT INTO pelamar
(nama, tanggal_lahir, alamat, telepon, email, id_lowongan, tentang_diri) 
VALUES
('$nama',
'$tanggal_lahir',
'$alamat',
'$telepon',
'$email',
'$id_lowongan',
'$tentang_diri')";


mysqli_query($conn, $sql);


header("Location: karir.php");
exit;
