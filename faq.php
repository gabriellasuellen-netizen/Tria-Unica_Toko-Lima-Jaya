<?php
include "header.php";
include "koneksi.php";

$sql = "SELECT * FROM faq ORDER BY id_faq ASC";
$query = mysqli_query($conn, $sql);
?>

<body>

  <section class="faq-hero" style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('img/Hero-img/Toko\ Lima\ Jaya.jpeg') center/cover no-repeat;">
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

  <?php
  $base = "";
  include "footer.php";
  ?>

  <script src="js/faq.js"></script>

</body>

</html>