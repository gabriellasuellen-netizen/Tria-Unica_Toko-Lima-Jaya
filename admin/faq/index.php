<?php
session_start();
include "../header.php";

include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}

$sql = "SELECT
            faq.*,
            users.username
        FROM faq
        LEFT JOIN users
        ON faq.id_users = users.id_users
        ORDER BY faq.id_faq DESC";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Kelola FAQ</title>
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

        <h1>Kelola FAQ</h1>

        <a href="tambah.php" class="btn-tambah">
            + Tambah
        </a>


        <table>

            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th>Diubah oleh</th>
                <th>Aksi</th>
            </tr>


            <?php

            $no = 1;

            while ($data = mysqli_fetch_assoc($query)) {

            ?>

                <tr>

                    <td>
                        <?= $no++; ?>
                    </td>


                    <td>
                        <?= $data['pertanyaan']; ?>
                    </td>


                    <td>
                        <?= $data['jawaban']; ?>
                    </td>

                    <td>
                        <?= $data['username']; ?>
                    </td>

                    <td>

                        <a class="btn-edit"
                            href="edit.php?id=<?= $data['id_faq']; ?>">
                            Edit
                        </a>


                        <a class="btn-hapus"
                            href="hapus.php?id=<?= $data['id_faq']; ?>"
                            onclick="return confirm('Yakin ingin menghapus FAQ ini?')">
                            Hapus
                        </a>

                    </td>


                </tr>


            <?php } ?>


        </table>


    </div>


</body>

</html>