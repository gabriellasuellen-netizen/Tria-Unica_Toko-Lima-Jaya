<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Mainan</title>
    <link rel="stylesheet" href="mainan.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar">
      <div class="logonav">Lima Jaya</div>

      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari Produk" />
      </div>

      <div class="menu" id="menu">
        <a href="../index.html">BERANDA</a>
        <a href="#" class="active">PRODUK</a>
        <a href="../tentang.html">TENTANG KAMI</a>
        <a href="../karir.html">KARIR</a>
        <a href="../faq.html">FAQ</a>
      </div>

      <!-- hamburger -->
      <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>

    <section class="category-nav">
      <div class="cat-container">
        <a href="../produk.html" class="cat-btn" data-category="all">Semua</a>
        <a href="makanan.html" class="cat-btn" data-category="makanan">Makanan</a>
        <a href="minuman.html" class="cat-btn" data-category="minuman">Minuman</a>
        <a href="sembako.html" class="cat-btn" data-category="sembako">Sembako</a>
        <a href="bahan.html" class="cat-btn" data-category="bahan">
          Bahan Kue & Masakan
        </a>
        <a href="kebutuhan.html" class="cat-btn" data-category="rumah">
          Kebutuhan Rumah Tangga
        </a>
        <a href="#" class="cat-btn active" data-category="mainan">Mainan</a>
        <a href="atk.html" class="cat-btn" data-category="alat">
          Alat Tulis & Kantor
        </a>
        <a href="sepeda.html" class="cat-btn" data-category="sepeda">
          Sepeda & Aksesorisnya
        </a>
      </div>
    </section>

    <section class="banner">
      <div class="banner-content">
        <p>MAINAN</p>
      </div>
    </section>

    <section class="best-products">
      <h2>MAINAN</h2>

      <div class="best-wrapper">
        <div class="best-container">
            <!-- card 1 -->
          <div class="best-card">
            <img src="../Produk-img/Mainan/fishing.jpeg" />
            <h3>Fishing Games</h3>
            <p>Kategori : Mainan <br />Merek : Premium Toys</p>
          </div>

          <!-- card 2 -->
          <div class="best-card">
            <img src="../Produk-img/Mainan/dinovalley.jpeg" />
            <h3>Dino Valley</h3>
            <p>Kategori : Mainan <br />Merek : Dinosaur World</p>
          </div>

          <!-- card 3 -->
          <div class="best-card">
            <img src="../Produk-img/Mainan/jm23098.jpeg" />
            <h3>Wild Explorer</h3>
            <p>Kategori : Mainan <br />Merek : JM</p>
          </div>

          <!-- card 4 -->
          <div class="best-card">
            <img src="../Produk-img/Mainan/pesawat.jpeg" />
            <h3>Pesawat Mainan</h3>
            <p>Kategori : Mainan <br />Merek : Lion</p>
          </div>

          <!-- card 5 -->
          <div class="best-card">
            <img src="../Produk-img/Mainan/raketbulutangkis.jpeg" />
            <h3>Raket Bulu Tangkis</h3>
            <p>Kategori : Mainan <br />Merek : -</p>
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

    <script src="mainan.js"></script>
  </body>
</html>
