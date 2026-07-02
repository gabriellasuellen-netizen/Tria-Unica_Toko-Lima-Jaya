<?php
include "header.php";
?>

<body>
  <section class="about" style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('img/Hero-img/Toko\ Lima\ Jaya.jpeg') center/cover no-repeat;">
    <div class="overlay"></div>

    <div class="about-container">
      <!-- kiri -->
      <div class="about-text">
        <h1>Lima Jaya</h1>

        <p class="fade-left">
          Toko Lima Jaya Batang Tarang merupakan usaha perdagangan yang
          bergerak di bidang penjualan kebutuhan sehari-hari secara eceran
          (ritel) dan grosir. Toko ini hadir sebagai solusi belanja praktis
          sekaligus menjadi pemasok bagi masyarakat dan pelaku usaha kecil
          dengan harga yang kompetitif dan bersahabat.
        </p>

        <p class="fade-left">
          Selain menyediakan produk kebutuhan harian, Toko Lima Jaya juga
          menghadirkan produk lokal khas daerah yang bersifat musiman, seperti
          dodol durian/lempok dan gula aren/enau.
        </p>

        <p class="fade-left">
          Sejak berdiri, Toko Lima Jaya berkomitmen untuk memberikan pelayanan
          terbaik kepada pelanggan dengan mengutamakan kenyamanan, kejujuran,
          dan kepuasan konsumen.
        </p>
      </div>

      <!-- kanan  -->
      <div class="about-images">
        <img
          src="img/Produk-img/Bahan Kue & Masakan/argapura.jpeg"
          class="img top" />
        <img src="img/Produk-img/Minuman/ultramilk.jpeg" class="img middle" />
        <img
          src="img/Produk-img/Alat Tulis & Kantor/montanagelinkpen.jpeg"
          class="img bottom" />
      </div>
    </div>
  </section>

  <section class="find-us">
    <div class="find-container">
      <!-- kiri: map -->
      <div class="map">
        <iframe
          src="https://www.google.com/maps?q=Toko+Lima+Jaya+Batang+Tarang&output=embed"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </div>

      <!-- kanan: text -->
      <div class="find-text">
        <h2>AYO KUNJUNGI KAMI!</h2>

        <div class="arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <a href="https://wa.me/62895620130261" class="contact-btn">
          <i class="fa-brands fa-whatsapp"></i>
          Hubungi Kami
        </a>
      </div>
    </div>
  </section>

  <section class="services">
    <h2>LAYANAN KAMI</h2>

    <div class="services-container">
      <!-- item 1 -->
      <div class="service-item">
        <img src="img/Galeri-img/services.jpeg" />
        <p>LANGSUNG DI TOKO</p>
      </div>

      <!-- item 2 -->
      <div class="service-item">
        <a
          href="https://wa.me/62895620130261"
          target="_blank"
          class="wa-link">
          <div class="wa-icon">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
        </a>

        <p>PEMESANAN MELALUI<br />WHATSAPP</p>
      </div>

      <!-- item 3 -->
      <div class="service-item">
        <img src="img/Galeri-img/delivery.jpg" />
        <p>PESAN-ANTAR</p>
      </div>
    </div>
  </section>

  <?php
  $base = "";
  include "footer.php";
  ?>

  <script src="js/tentang.js"></script>
</body>

</html>