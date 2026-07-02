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
        WHERE kategori.nama_kategori = 'Sembako'
        ORDER BY produk.nama ASC";

$query = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk Sembako</title>
  <link rel="stylesheet" href="sembako.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
  <section class="banner" style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('../img/Hero-img/bakery.jpg') center/cover no-repeat;">
    <div class="banner-content">
      <p>SEMBAKO</p>
    </div>
  </section>

  <section class="best-products">
    <h2>SEMBAKO</h2>

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

  <?php
  $base = "../";
  include "../footer.php";
  ?>

  <script src="sembako.js"></script>
</body>

</html>