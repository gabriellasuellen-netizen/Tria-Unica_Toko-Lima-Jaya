<?php
session_start();

//Cek login admin
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard Admin</title>
</head>

<body>

  <div class="sidebar">
    <h2>ADMIN PANEL</h2>

    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="produk/index.php">Kelola Produk</a></li>
      <li><a href="lowongan/index.php">Kelola Lowongan</a></li>
      <li><a href="pelamar/index.php">Data Pelamar</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

</body>

</html>