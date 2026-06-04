<?php

$base = "/Project Web_Toko Lima Jaya";
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

?>

<section class="category-nav">
    <div class="cat-container">

        <a href="<?= $base ?>/produk.php"
            class="cat-btn <?= $currentPage == 'produk' ? 'active' : '' ?>">
            Semua
        </a>

        <a href="<?= $base ?>/Kategori-codes/makanan.php"
            class="cat-btn <?= $currentPage == 'makanan' ? 'active' : '' ?>">
            Makanan
        </a>

        <a href="<?= $base ?>/Kategori-codes/minuman.php"
            class="cat-btn <?= $currentPage == 'minuman' ? 'active' : '' ?>">
            Minuman
        </a>

        <a href="<?= $base ?>/Kategori-codes/sembako.php"
            class="cat-btn <?= $currentPage == 'sembako' ? 'active' : '' ?>">
            Sembako
        </a>

        <a href="<?= $base ?>/Kategori-codes/bahan.php"
            class="cat-btn <?= $currentPage == 'bahan' ? 'active' : '' ?>">
            Bahan Kue & Masakan
        </a>

        <a href="<?= $base ?>/Kategori-codes/kebutuhan.php"
            class="cat-btn <?= $currentPage == 'kebutuhan' ? 'active' : '' ?>">
            Kebutuhan Rumah Tangga
        </a>

        <a href="<?= $base ?>/Kategori-codes/mainan.php"
            class="cat-btn <?= $currentPage == 'mainan' ? 'active' : '' ?>">
            Mainan
        </a>

        <a href="<?= $base ?>/Kategori-codes/atk.php"
            class="cat-btn <?= $currentPage == 'atk' ? 'active' : '' ?>">
            Alat Tulis & Kantor
        </a>

        <a href="<?= $base ?>/Kategori-codes/sepeda.php"
            class="cat-btn <?= $currentPage == 'sepeda' ? 'active' : '' ?>">
            Sepeda & Aksesorisnya
        </a>

    </div>
</section>