<?php
session_start();
include "../header.php";

include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}

$sql = "SELECT * FROM produk ORDER BY id_produk DESC";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Kelola Produk</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap"
        rel="stylesheet">
</head>

<body>


    <div class="container">

        <h1>Daftar Produk</h1>

        <a href="tambah.php" class="btn-tambah">
            + Tambah Produk
        </a>


        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>


            <?php
            $no = 1;

            while ($data = mysqli_fetch_assoc($query)) {
            ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td>
                        <?= $data['nama']; ?>
                    </td>

                    <td>
                        <?= $data['merek']; ?>
                    </td>

                    <td>
                        <img
                            src="../../img/Produk-img/<?= $data['gambar']; ?>"
                            width="80">
                    </td>

                    <td>
                        <?= $data['id_kategori']; ?>
                    </td>

                    <td>

                        <a class="btn-edit"
                            href="edit.php?id=<?= $data['id_produk']; ?>">
                            Edit
                        </a>

                        <a class="btn-hapus"
                            href="hapus.php?id=<?= $data['id_produk']; ?>"
                            onclick="return confirm('Yakin ingin menghapus produk ini?')">
                            Hapus
                        </a>

                    </td>

                </tr>

            <?php } ?>


        </table>


    </div>


</body>

</html>