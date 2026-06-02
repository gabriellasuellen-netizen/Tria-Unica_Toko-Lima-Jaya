<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");

$cssFiles = [
  'index' => 'beranda.css',
  'produk' => 'produk.css',
  'tentang' => 'tentang.css',
  'karir' => 'karir.css',
  'faq' => 'faq.css'
];
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= switch($currentPage) {
  case 'index':
    echo 'Beranda | Lima Jaya';
    break;
  case 'produk':
    echo 'Produk | Lima Jaya';
    break;
  case 'tentang':
    echo 'Tentang | Lima Jaya';
    break;
  case 'karir':
    echo 'Karir | Lima Jaya';
    break;
  case 'faq':
    echo 'FAQ | Lima Jaya';
    break;
  defaut:
    echo 'Lima Jaya';
  } ?></title>
    <link rel="stylesheet" href="css/<?= $cssFiles[$currentPage] ?? 'style.css'; ?>.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=shopping_bag_speed"
    />
  </head>
