<?php
include "header.php";
?>
  <body>
    <!-- NAVBAR -->
    <div class="navbar">
      <div class="logonav">Lima Jaya</div>

      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input
          type="text"
          id="searchInput"
          placeholder="Cari kategori atau produk"
        />
      </div>

      <div class="menu" id="menu">
        <a href="index.php">BERANDA</a>
        <a href="produk.php">PRODUK</a>
        <a href="tentang.php">TENTANG KAMI</a>
        <a href="karir.php">KARIR</a>
        <a href="#" class="active">FAQ</a>
      </div>

      <!-- hamburger -->
      <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>

    <section class="faq-hero">
      <h1>FAQ</h1>
      <p>Temukan jawaban dari pertanyaan yang sering ditanyakan pelanggan.</p>
    </section>

    <section class="faq-section">
      <!-- item -->
      <div class="faq-item">
        <button class="faq-question">
          Barang atau jasa apa saja yang disediakan?
          <i class="fa-solid fa-chevron-down"></i>
        </button>

        <div class="faq-answer">
          <p>
            Lima Jaya menyediakan berbagai kebutuhan sehari-hari seperti
            makanan, minuman, sembako, alat tulis, mainan, kebutuhan rumah
            tangga, dan lainnya. Kami juga menyediakan jasa pesan-antar sesuai
            dengan pesanan dan alamat Anda.
          </p>
        </div>
      </div>

      <!-- item -->
      <div class="faq-item">
        <button class="faq-question">
          Metode pembayaran apa saja yang tersedia?
          <i class="fa-solid fa-chevron-down"></i>
        </button>

        <div class="faq-answer">
          <p>Kami menerima pembayaran tunai, transfer bank, dan QRIS.</p>
        </div>
      </div>

      <!-- item -->
      <div class="faq-item">
        <button class="faq-question">
          Bagaimana cara melamar kerja?
          <i class="fa-solid fa-chevron-down"></i>
        </button>

        <div class="faq-answer">
          <p>
            Anda dapat membuka halaman karir, memilih posisi yang tersedia,
            kemudian mengisi form lamaran kerja dan mengirimkannya melalui
            WhatsApp.
          </p>
        </div>
      </div>

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
              <li><a href="tentang.php">Tentang kami</a></li>
              <li><a href="produk.php">Produk</a></li>
              <li><a href="karir.php">Karir</a></li>
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
              <li><a href="faq.php">FAQ</a></li>
            </ul>
          </div>
        </div>

        <!-- kolom 4 -->
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
            <p>Setiap Hari,<br />06.00 - 16.00 WIB</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/faq.js"></script>
  </body>
</html>
