<?php
include "header.php";
include "kategori.php";
include "koneksi.php";

$terlaris = mysqli_query($conn, "
    SELECT produk.*, kategori.nama_kategori
    FROM produk
    JOIN kategori
    ON produk.id_kategori = kategori.id_kategori
    ORDER BY id_produk DESC
    LIMIT 14
");

$semua = mysqli_query($conn, "
    SELECT produk.*, kategori.nama_kategori
    FROM produk
    JOIN kategori
    ON produk.id_kategori = kategori.id_kategori
    ORDER BY nama ASC
");
?>

<body>
  <section class="banner" style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('img/Hero-img/Toko\ Lima\ Jaya.jpeg') center/cover no-repeat;">
    <div class="banner-content">
      <p>TEMUKAN KEBUTUHAN HARIAN ANDA</p>
    </div>
  </section>

  <section class="all-products">
    <h2>PRODUK TERLARIS</h2>

    <div class="all-wrapper">
      <div class="all-container">

        <?php while ($p = mysqli_fetch_assoc($terlaris)) { ?>
          <div class="all-card">
            <img src="img/Produk-img/<?= $p['gambar']; ?>" alt="<?= $p['nama']; ?>">
            <h3><?= htmlspecialchars($p['nama']); ?></h3>
            <p>
              Kategori : <?= htmlspecialchars($p['nama_kategori']); ?><br>
              Merek : <?= htmlspecialchars($p['merek']); ?>
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

  <section class="all-products-grid">
    <h2>SEMUA PRODUK</h2>

    <div class="grid-container">

      <?php while ($p = mysqli_fetch_assoc($semua)) { ?>
        <div class="grid-card">
          <img src="img/Produk-img/<?= $p['gambar']; ?>" alt="<?= $p['nama']; ?>">
          <h3><?= htmlspecialchars($p['nama']); ?></h3>
          <p>
            Kategori : <?= htmlspecialchars($p['nama_kategori']); ?><br>
            Merek : <?= htmlspecialchars($p['merek']); ?>
          </p>
        </div>
      <?php } ?>

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
            <li><a href="tentang.html">Tentang kami</a></li>
            <li><a href="produk.html">Produk</a></li>
            <li><a href="karir.html">Karir</a></li>
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
            <li><a href="faq.html">FAQ</a></li>
          </ul>
        </div>
      </div>

      <!-- kolom 4 -->
      <div class="col">
        <div class="top">
          <h3>FITUR</h3>
          <ul>
            <li><a href="produk.html">Kategori</a></li>
            <li><a href="produk.html">Produk Terlaris</a></li>
          </ul>
        </div>
        <div class="bottom">
          <h3>BUKA</h3>
          <p>Setiap Hari,<br />06.00 - 16.00 WIB</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/produk.js"></script>
</body>

</html>