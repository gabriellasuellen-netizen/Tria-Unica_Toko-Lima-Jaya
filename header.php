<?php
$base = "/Project Web_Toko Lima Jaya";
$currentPage = basename($_SERVER['PHP_SELF'], ".php");

$titles = [
  "index"   => "Beranda | Lima Jaya",
  "produk"  => "Produk | Lima Jaya",
  "tentang" => "Tentang Kami | Lima Jaya",
  "karir"   => "Karir | Lima Jaya",
  "faq"     => "FAQ | Lima Jaya"
];

$cssFiles = [
  "index"   => "beranda",
  "produk"  => "produk",
  "tentang" => "tentang",
  "karir"   => "karir",
  "faq"     => "faq"
];

?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $titles[$currentPage] ?? "Lima Jaya" ?></title>

  <link rel="stylesheet"
    href="css/<?= $cssFiles[$currentPage] ?? "style" ?>.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap"
    rel="stylesheet">

  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=shopping_bag_speed">
</head>

<body>
  <?php

  $currentPage = basename($_SERVER['PHP_SELF'], '.php');

  $titles = [
    "index"   => "Beranda | Lima Jaya",
    "produk"  => "Produk | Lima Jaya",
    "tentang" => "Tentang Kami | Lima Jaya",
    "karir"   => "Karir | Lima Jaya",
    "faq"     => "FAQ | Lima Jaya"
  ];

  $cssFiles = [
    "index"   => "beranda",
    "produk"  => "produk",
    "tentang" => "tentang",
    "karir"   => "karir",
    "faq"     => "faq"
  ];
  ?>
  <div class="navbar">
    <div class="logonav">Lima Jaya</div>

    <div class="search">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input
        type="text"
        id="searchInput"
        placeholder="Cari kategori atau produk">
    </div>

    <div class="menu" id="menu">
      <a href="<?= $base ?>/index.php"
        class="<?= $currentPage == 'index' ? 'active' : '' ?>">
        BERANDA
      </a>

      <a href="<?= $base ?>/produk.php"
        class="<?= $currentPage == 'produk' ? 'active' : '' ?>">
        PRODUK
      </a>

      <a href="<?= $base ?>/tentang.php"
        class="<?= $currentPage == 'tentang' ? 'active' : '' ?>">
        TENTANG KAMI
      </a>

      <a href="<?= $base ?>/karir.php"
        class="<?= $currentPage == 'karir' ? 'active' : '' ?>">
        KARIR
      </a>

      <a href="<?= $base ?>/faq.php"
        class="<?= $currentPage == 'faq' ? 'active' : '' ?>">
        FAQ
      </a>
    </div>

    <div class="hamburger" id="hamburger">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>