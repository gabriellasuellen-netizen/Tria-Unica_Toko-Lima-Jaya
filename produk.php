<?php
include "header.php";
include "kategori.php";
include "koneksi.php";

$terlaris = mysqli_query($conn, "
    SELECT produk.*, kategori.nama_kategori
    FROM produk
    JOIN kategori
    ON produk.id_kategori = kategori.id_kategori
    ORDER BY id_produk ASC
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

  <?php
  $base = "";
  include "footer.php";
  ?>

  <script src="js/produk.js"></script>
</body>

</html>