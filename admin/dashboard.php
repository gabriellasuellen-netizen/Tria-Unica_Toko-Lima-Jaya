<?php
session_start();

//Cek login admin
if (!isset($_SESSION['admin'])) {
  header("Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
</head>
<body>

<div class="sidebar"
    <h2>ADMIN PANEL</h2>
  
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="produk/index.php">Kelola Produk</a></li>
      <li><a href="lowongan/index.php>Kelola Lowongan</a></li>
      <li><a href="pelamar/index.php>Data Pelamar</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="content">
    <h1>DASHBOARD ADMIN</h1>
    <br>

    <div class="card-container">

      <div class="card">
          <h3>Data Produk</h3>
          <p>Tambah, ubah, dan hapus produk<p>
      </div>

      <div class="card">
          <h3>Lowongan Kerja</h3>
          <p>Kelola daftar lowongan perkerjaan<p>
      </div>
    
      <div class="card">
          <h3>Data Pelamar</h3>
          <p>Lihat seluruh pelamar yang mendaftar<p>
      </div>
</div>

</body>
</html>
