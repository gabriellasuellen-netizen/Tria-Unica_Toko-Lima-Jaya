<?php
include "../header.php";
include "../kategori.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk Makanan</title>
  <link rel="stylesheet" href="makanan.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
  <section class="banner">
    <div class="banner-content">
      <p>MAKANAN</p>
    </div>
  </section>

  <section class="best-products">
    <h2>MAKANAN</h2>

    <div class="best-wrapper">
      <div class="best-container">
        <!-- card 1 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/chocolatos.jpeg" />
          <h3>Chocolatos</h3>
          <p>Kategori : Makanan <br />Merek : Chocolatos</p>
        </div>

        <!-- card 2 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/romakelapacoklat.jpeg" />
          <h3>Roma Kelapa Cream Coklat</h3>
          <p>Kategori : Makanan<br />Merek : Roma</p>
        </div>

        <!-- card 3 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/sardines.jpeg" />
          <h3>Sardines in Tomato Sauce</h3>
          <p>Kategori : Makanan<br />Merek : Sardines</p>
        </div>

        <!-- card 4 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/nextar.jpeg" />
          <h3>Nextar Chocolate Pie</h3>
          <p>Kategori : Makanan<br />Merek : Nextar</p>
        </div>

        <!-- card 5 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/romakelapavanilla.jpeg" />
          <h3>Roma Kelapa Cream Vanilla</h3>
          <p>Kategori : Makanan<br />Merek : Roma</p>
        </div>

        <!-- card 6 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/chilisardines.jpeg" />
          <h3>Chili Sardines</h3>
          <p>Kategori : Makanan<br />Merek : Chili</p>
        </div>

        <!-- card 7 -->
        <div class="best-card">
          <img src="../Produk-img/Makanan/yupistrawberrykiss.jpeg" />
          <h3>Yupi Strawberry Kiss</h3>
          <p>Kategori : Makanan<br />Merek : Yupi</p>
        </div>
      </div>
      <div class="scroll-arrow left">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
      <div class="scroll-arrow right">
        <i class="fa-solid fa-chevron-right"></i>
      </div>
    </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-grid">
      <!-- kolom 1 -->
      <div class="col">
        <div class="top">
          <h1 class="logo">Lima Jaya</h1>
          <p>TEMUI KEBUTUHAN SEHARI-HARI ANDA DI SINI</p>
        </div>
        <div class="bottom">
          <h3>HUBUNGI KAMI</h3>
          <p>0895 6201 30261</p>
        </div>
      </div>

      <!-- kolom 2 -->
      <div class="col">
        <div class="top">
          <h3>PERUSAHAAN</h3>
          <ul>
            <li><a href="../tentang.html">Tentang kami</a></li>
            <li><a href="../produk.html">Produk</a></li>
            <li><a href="../karir.html">Karir</a></li>
          </ul>
        </div>
        <div class="bottom">
          <h3>ALAMAT KAMI</h3>
          <p>
            Jl. Busuliung No. 07, Dusun Sembatu, Kec. Balai, Kab. Sanggau,
            Prov. Kalimantan Barat
          </p>
        </div>
      </div>

      <!-- kolom 3 -->
      <div class="col">
        <div class="top">
          <h3>LAYANAN</h3>
          <ul>
            <li>Hubungi Kami</li>
            <li><a href="../faq.html">FAQ</a></li>
          </ul>
        </div>
      </div>

      <!-- kolom 4 -->
      <div class="col">
        <div class="top">
          <h3>FITUR</h3>
          <ul>
            <li><a href="../produk.html">Kategori</a></li>
            <li><a href="../produk.html">Produk Terlaris</a></li>
          </ul>
        </div>
        <div class="bottom">
          <h3>BUKA</h3>
          <p>Setiap Hari,<br />06.00 - 16.00 WIB</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="makanan.js"></script>
</body>

</html>