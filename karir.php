<?php
session_start();
include "header.php";
include "koneksi.php";

$errors = $_SESSION['errors'] ?? [];
$success = $_SESSION['success'] ?? false;

unset($_SESSION['errors']);
unset($_SESSION['success']);

// Ambil lowongan yang masih aktif
$sql = "SELECT * FROM lowongan
        WHERE status='Aktif'
        ORDER BY id_lowongan ASC";
$query = mysqli_query($conn, $sql);
?>

<body>

  <section class="career-hero" style="background:
    linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),
    url('img/Hero-img/Toko\ Lima\ Jaya.jpeg');">

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

      <a href="#lowongan" class="career-btn">
        Lihat Lowongan
      </a>

    </div>

  </section>


  <section id="lowongan" class="jobs">

    <div class="jobs-title">
      <h2>LOWONGAN TERSEDIA</h2>
      <p>Temukan posisi yang sesuai dengan kemampuan dan minat Anda.</p>
    </div>


    <div class="jobs-container">

      <?php while ($data = mysqli_fetch_assoc($query)) { ?>

        <div class="job-card">

          <h3><?= htmlspecialchars($data['nama_lowongan']); ?></h3>

          <ul>

            <?php
            $syarat = explode("|", $data['syarat']);

            foreach ($syarat as $s) {
            ?>

              <li><?= htmlspecialchars(trim($s)); ?></li>

            <?php } ?>

          </ul>

          <a
            href="#form-lamaran"
            class="job-btn"
            data-job="<?= htmlspecialchars($data['nama_lowongan']); ?>">

            Lamar Sekarang

          </a>

        </div>

      <?php } ?>

    </div>

  </section>


  <section id="form-lamaran" class="apply">

    <div class="apply-title">
      <h2>FORM LAMARAN</h2>
      <p>Lengkapi data diri Anda di bawah ini.</p>
    </div>

    <?php if (!empty($errors)): ?>
      <?php foreach ($errors as $error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($success): ?>
      <div class="success">
        Pendaftaran berhasil.
      </div>
    <?php endif; ?>

    <?php include "frm_pelamar.php"; ?>

  </section>

  <div class="spacer"></div>

  <?php
  $base = "";
  include "footer.php";
  ?>

  <script src="js/karir.js"></script>

</body>

</html>