<?php
include "header.php";
include "koneksi.php";

$sql = "SELECT * FROM faq ORDER BY id_faq ASC";
$query = mysqli_query($conn, $sql);
?>

<body>

  <section class="faq-hero">
    <h1>FAQ</h1>
    <p>Temukan jawaban dari pertanyaan yang sering ditanyakan pelanggan.</p>
  </section>

  <section class="faq-section">

    <?php while ($data = mysqli_fetch_assoc($query)) { ?>

      <div class="faq-item">

        <button class="faq-question">
          <?= htmlspecialchars($data['pertanyaan']); ?>
          <i class="fa-solid fa-chevron-down"></i>
        </button>

        <div class="faq-answer">
          <p>
            <?= nl2br(htmlspecialchars($data['jawaban'])); ?>
          </p>
        </div>

      </div>

    <?php } ?>

    <div class="faq-contact">
      <h3>Masih punya pertanyaan?</h3>
      <p>Hubungi kami melalui WhatsApp untuk informasi lebih lanjut.</p>

      <a href="https://wa.me/62895620130261" class="contact-btn">
        <i class="fa-brands fa-whatsapp"></i>
        Hubungi Kami
      </a>
    </div>

  </section>

  <footer class="footer">

    <div class="footer-grid">

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

      <div class="col">
        <div class="top">
          <h3>PERUSAHAAN</h3>

          <ul>
            <li><a href="tentang.php">Tentang kami</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="karir.php">Karir</a></li>
          </ul>

        </div>

        <div class="bottom">
          <h3>ALAMAT KAMI</h3>

          <p>
            Jl. Busuliung No. 07,
            Dusun Sembatu,
            Kec. Balai,
            Kab. Sanggau,
            Prov. Kalimantan Barat
          </p>

        </div>
      </div>

      <div class="col">
        <div class="top">
          <h3>LAYANAN</h3>

          <ul>
            <li>Hubungi Kami</li>
            <li><a href="faq.php">FAQ</a></li>
          </ul>

        </div>
      </div>

      <div class="col">

        <div class="top">

          <h3>FITUR</h3>

          <ul>
            <li><a href="produk.php">Kategori</a></li>
            <li><a href="produk.php">Produk Terlaris</a></li>
          </ul>

        </div>

        <div class="bottom">

          <h3>BUKA</h3>

          <p>
            Setiap Hari,<br>
            06.00 - 16.00 WIB
          </p>

        </div>

      </div>

    </div>

  </footer>

  <script src="js/faq.js"></script>

</body>

</html>