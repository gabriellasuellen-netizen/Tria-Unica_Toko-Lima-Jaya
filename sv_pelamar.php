<?php
include 'koneksi.php';

$nama = trim($_POST['nama'] ?? '');
$tanggal_lahir = trim($_POST['tanggal_lahir'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$telepon = trim($_POST['telepon'] ?? '');
$email = trim($_POST['email'] ?? '');
$posisi = trim($_POST['posisi'] ?? '');
$tentang_diri = trim($_POST['tentang_diri'] ?? '');

$sql_course = "SELECT price FROM courses WHERE id = '$course_id'";
$query_course = mysqli_query($conn, $sql_course);
$result_course = mysqli_fetch_array($query_course);
$unit_price = $result_course['price'];

$sql = "INSERT INTO pelamar (
            nama, 
            tanggal_lahir,
            alamat,
            telepon,
            email,
            posisi,
            tentang_diri
        ) VALUES (
          '$nama', 
          '$tanggal_lahir', 
          '$alamat', 
          '$telepon', 
          '$email', 
          '$posisi',
          '$tentang_diri'
        )";
$query = mysqli_query($conn, $sql);

header("Location: karir.php");
exit();

?>
