<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit;
}

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>


  <div class="dashboard">


    <h1>
      Welcome, admin!
    </h1>

    <p class="subtitle">
      Kelola sistem Toko Lima Jaya melalui menu di bawah ini
    </p>


    <div class="menu-container">


      <a href="dashboard.php"
        class="menu-card <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">

        <h3>Dashboard</h3>
        <p>Halaman utama admin</p>

      </a>



      <a href="produk/index.php"
        class="menu-card">

        <h3>Kelola Produk</h3>
        <p>Tambah, edit, dan hapus produk</p>

      </a>



      <a href="lowongan/index.php"
        class="menu-card">

        <h3>Kelola Lowongan</h3>
        <p>Mengatur informasi lowongan kerja</p>

      </a>



      <a href="pelamar/index.php"
        class="menu-card">

        <h3>Data Pelamar</h3>
        <p>Lihat data pelamar pekerjaan</p>

      </a>



      <a href="logout.php"
        class="menu-card logout">

        <h3>Logout</h3>
        <p>Keluar dari halaman admin</p>

      </a>


    </div>


  </div>


</body>

</html>