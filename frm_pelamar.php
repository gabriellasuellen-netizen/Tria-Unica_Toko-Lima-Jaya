<?php
include "koneksi.php";
?>
<form action="sv_pelamar.php" method="post" id="applyForm">
    <label for="nama">Nama Lengkap</label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama sesuai KTP" required />

    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required />

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat tempat tinggal" required />

    <label for="telepon">Nomor</label>
    <input type="tel" name="telepon" id="telepon" placeholder="Masukkan nomor HP/WhatsApp" required />

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Masukkan alamat email" required />

    <!-- isi posisi otomatis sesuai dengan dimana posisi diklik -->
    <label for="posisi">Posisi</label>

    <select id="posisi" name="id_lowongan" required>
        <option value="">-- Pilih Posisi --</option>
        <?php
        $sql = "SELECT * FROM lowongan WHERE status='Aktif'";
        $query = mysqli_query($conn, $sql);

        while ($result = mysqli_fetch_assoc($query)) {
        ?>

            <option value="<?= $result['id_lowongan']; ?>">
                <?= $result['nama_lowongan']; ?>
            </option>

        <?php
        }
        ?>
    </select>

    <textarea
        id="tentang"
        name="tentang_diri"
        placeholder="Ceritakan tentang diri Anda"
        required></textarea>

    <button type="submit">Kirim Lamaran</button>
</form>