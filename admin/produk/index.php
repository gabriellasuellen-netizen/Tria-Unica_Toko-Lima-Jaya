<?php
session_start();

include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}

$sql = "SELECT * FROM lowongan ORDER BY id_lowongan DESC";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Kelola Lowongan</title>
    <link rel="stylesheet" href="../css/lowongan.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap"
        rel="stylesheet">
</head>

<body>


    <div class="container">

        <h1>Daftar Lowongan</h1>

        <a href="tambah.php" class="btn-tambah">
            + Tambah Lowongan
        </a>


        <table>

            <tr>
                <th>No</th>
                <th>Posisi</th>
                <th>Syarat</th>
                <th>Status</th>
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
                        <?= $data['nama_lowongan']; ?>
                    </td>


                    <td>

                        <ul>

                            <?php

                            $syarat = explode("|", $data['syarat']);

                            foreach ($syarat as $s) {

                            ?>

                                <li>
                                    <?= $s; ?>
                                </li>

                            <?php } ?>

                        </ul>

                    </td>


                    <td>
                        <?= $data['status']; ?>
                    </td>

                    <td>

                        <a class="btn-edit"
                            href="edit.php?id=<?= $data['id_lowongan']; ?>">
                            Edit
                        </a>


                        <a class="btn-hapus"
                            href="hapus.php?id=<?= $data['id_lowongan']; ?>"
                            onclick="return confirm('Yakin ingin menghapus lowongan ini?')">
                            Hapus
                        </a>

                    </td>


                </tr>


            <?php } ?>


        </table>


    </div>


</body>

</html>