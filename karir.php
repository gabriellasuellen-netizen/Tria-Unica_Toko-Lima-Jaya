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
        <a href="index.html">BERANDA</a>
        <a href="produk.html">PRODUK</a>
        <a href="tentang.html">TENTANG KAMI</a>
        <a href="#" class="active">KARIR</a>
        <a href="faq.html">FAQ</a>
      </div>

      <!-- hamburger -->
      <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>

    <section class="career-hero">
      <div class="career-overlay"></div>

      <div class="career-content">
        <h1>
          Bergabung dengan <br />
          <span class="brand">Lima Jaya</span>
        </h1>

        <p>
          Kami mencari individu yang bersemangat dan pekerja keras untuk
          berkembang bersama kami.
        </p>

        <a href="#lowongan" class="career-btn"> Lihat Lowongan </a>
      </div>
    </section>

    <section id="lowongan" class="jobs">
      <div class="jobs-title">
        <h2>LOWONGAN TERSEDIA</h2>
        <p>Temukan posisi yang sesuai dengan kemampuan dan minat Anda.</p>
      </div>

      <div class="jobs-container">
        <!-- CARD 1 -->
        <div class="job-card">
          <h3>Kasir</h3>

          <ul>
            <li>Ramah dan komunikatif</li>
            <li>Mampu bekerja sama</li>
            <li>Teliti dan disiplin</li>
            <li>Jujur</li>
          </ul>

          <a href="#form-lamaran" class="job-btn" data-job="Kasir">
            Lamar Sekarang
          </a>
        </div>

        <!-- CARD 2 -->
        <div class="job-card">
          <h3>Pramuniaga</h3>

          <ul>
            <li>Aktif dan pekerja keras</li>
            <li>Mampu melayani pelanggan</li>
            <li>Rajin menata barang</li>
            <li>Melakukan pekerjaan dengan rapi</li>
          </ul>

          <a href="#form-lamaran" class="job-btn" data-job="Pramuniaga">
            Lamar Sekarang
          </a>
        </div>

        <!-- CARD 3 -->
        <div class="job-card">
          <h3>Staff Gudang</h3>

          <ul>
            <li>Mampu mengangkat barang</li>
            <li>Disiplin dan bertanggung jawab</li>
            <li>Mampu bekerja cepat</li>
            <li>Teliti dalam pengecekan stok</li>
          </ul>

          <a href="#form-lamaran" class="job-btn" data-job="Staff Gudang">
            Lamar Sekarang
          </a>
        </div>
      </div>
    </section>

    <section id="form-lamaran" class="apply">
      <div class="apply-title">
        <h2>FORM LAMARAN</h2>
        <p>Lengkapi data diri Anda di bawah ini.</p>
      </div>

      <form id="applyForm">
        <input type="text" id="nama" placeholder="Nama Lengkap" required />

        <input type="date" id="tgllahir" placeholder="Tanggal Lahir" required />

        <input type="text" id="alamat" placeholder="Alamat" required />

        <input type="tel" id="telepon" placeholder="Nomor WhatsApp" required />

        <input type="email" id="email" placeholder="Email" required />

        <!-- isi posisi otomatis sesuai dengan dimana posisi diklik -->
        <input type="text" id="posisi" readonly />

        <textarea
          id="tentang"
          placeholder="Ceritakan tentang diri Anda"
          required
        ></textarea>

        <button type="submit">Kirim Lamaran</button>
      </form>
    </section>

    <div class="spacer"></div>

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
              <li><a href="karir.html">Karir</a>Karir</li>
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

    <script src="js/karir.js"></script>
  </body>
</html>
