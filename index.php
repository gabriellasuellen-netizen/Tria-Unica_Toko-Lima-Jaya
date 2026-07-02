<?php
include "header.php";
?>

<body>
  <section class="hero">
    <div class="hero">
      <div class="hero-left">
        <h3>SELAMAT DATANG DI</h3>
        <h1 class="title">Lima Jaya</h1>
        <p>TEMUKAN KEBUTUHAN SEHARI-HARI ANDA DI SINI</p>
        <button id="scrollBtn" class="btn">LET'S GO!</button>
      </div>

      <div class="hero-right">
        <img src="img/Hero-img/Toko Lima Jaya.jpeg" alt="store" />

        <div class="wa-container">
          <p class="wa-text">Hubungi kami untuk memesan produk!</p>
          <div class="whatsapp">
            <a
              href="https://wa.me/62895620130261"
              target="_blank"
              class="wa-link">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="kategori" class="kategori">
    <h2>CARI KEBUTUHAN ANDA</h2>

    <div class="kategori-wrapper">
      <!-- kiri -->
      <div class="kategori-col">
        <div class="item">
          <div class="icon"><i class="fa-solid fa-utensils"></i></div>
          <a href="Kategori-codes/makanan.php" class="box">Makanan</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-bottle-water"></i></div>
          <a href="Kategori-codes/minuman.php" class="box">Minuman</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-box"></i></div>
          <a href="Kategori-codes/sembako.php" class="box">Sembako</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-bread-slice"></i></div>
          <a href="Kategori-codes/bahan.php" class="box">Bahan Kue & Masakan</a>
        </div>
      </div>

      <!-- kanan -->
      <div class="kategori-col">
        <div class="item">
          <div class="icon"><i class="fa-solid fa-house"></i></div>
          <a href="Kategori-codes/kebutuhan.php" class="box">Kebutuhan Rumah Tangga</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-puzzle-piece"></i></div>
          <a href="Kategori-codes/mainan.php" class="box">Mainan</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-pen-ruler"></i></div>
          <a href="Kategori-codes/atk.php" class="box">Alat Tulis & Kantor</a>
        </div>

        <div class="item">
          <div class="icon"><i class="fa-solid fa-bicycle"></i></div>
          <a href="Kategori-codes/sepeda.php" class="box">Sepeda & Aksesorisnya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="featured">
    <h2>PRODUK TERLARIS</h2>

    <div class="product-wrapper">
      <!-- CARD 1 -->
      <div class="card">
        <img src="img/Produk-img/Bahan Kue & Masakan/masako.jpeg" alt="product" />

        <div class="card-body">
          <div class="title">
            <h3>Masako Bumbu Masakan</h3>
          </div>
          <p>Kategori : Bahan Kue & Masakan <br />Merek : Ajinomoto</p>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card">
        <img
          src="img/Produk-img/Kebutuhan Rumah Tangga/mamalemon.jpeg"
          alt="product" />

        <div class="card-body">
          <div class="title">
            <h3>Mama Lemon</h3>
          </div>
          <p>Kategori : Kebutuhan Rumah Tangga<br />Merek : Lion Japan</p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card">
        <img
          src="img/Produk-img/Sepeda & Aksesorisnya/bmxsepeda.jpeg"
          alt="product" />

        <div class="card-body">
          <div class="title">
            <h3>Sepeda BMX</h3>
          </div>
          <p>Kategori : Sepeda & Aksesorisnya<br />Merek : Foster</p>
        </div>
      </div>
    </div>

    <!-- icon keranjang belanja , saat klik bisa ke halaman produk -->
    <a href="produk.html">
      <span class="material-symbols-outlined"> shopping_bag_speed </span>
    </a>
  </section>

  <section class="galeri">
    <h2>GALERI</h2>

    <div class="carousel">
      <div class="track">
        <div class="slide active">
          <img src="img/Galeri-img/1.jpeg" />
        </div>

        <div class="slide">
          <img src="img/Galeri-img/2.jpeg" />
        </div>

        <div class="slide">
          <img src="img/Galeri-img/3.jpeg" />
        </div>
      </div>
    </div>

    <div class="dotsgaleri">
      <span class="dotgaleri active" data-index="0"></span>
      <span class="dotgaleri" data-index="1"></span>
      <span class="dotgaleri" data-index="2"></span>
    </div>
  </section>

  <div class="spacer"></div>
  <?php
  $base = "";
  include "footer.php";
  ?>
  <script src="js/beranda.js"></script>
</body>

</html>