<?php
include "../header.php";
include "../kategori.php";
include "../koneksi.php";

$sql = "SELECT
            produk.*,
            kategori.nama_kategori
        FROM produk
        JOIN kategori
        ON produk.id_kategori = kategori.id_kategori
        WHERE kategori.nama_kategori = 'Bahan Kue & Masakan'
        ORDER BY produk.nama ASC";

$query = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk Bahan Kue & Masakan</title>
  <link rel="stylesheet" href="bahan.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
  <section class="banner" style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('../img/Hero-img/cook.jpg') center/cover no-repeat;">
    <div class="banner-content">
      <p>BAHAN KUE & MASAKAN</p>
    </div>
  </section>

  <section class="best-products">
    <h2>BAHAN KUE & MASAKAN</h2>

    <div class="best-wrapper">
      <div class="best-container">
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
          <div class="best-card">
            <img src="../img/Produk-img/<?= $data['gambar']; ?>">
            <h3><?= htmlspecialchars($data['nama']); ?></h3>
            <p>
              Kategori : <?= htmlspecialchars($data['nama_kategori']); ?>
              <br>
              Merek : <?= htmlspecialchars($data['merek']); ?>
            </p>
          </div>
        <?php } ?>
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

  <script src="bahan.js"></script>
</body>

</html>