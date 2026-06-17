<?php
session_start();

include "../../koneksi.php";

// cek login admin
if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}


// mengambil data pelamar
$sql = "SELECT * FROM pelamar ORDER BY id_pelamar DESC";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pelamar</title>
    <link rel="stylesheet" href="../css/pelamar.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Great+Vibes&display=swap"
        rel="stylesheet">
</head>


<body>


    <div class="container">

        <h1>DATA PELAMAR</h1>

        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>Tentang Diri</th>
            </tr>


            <?php
            $no = 1;

            while ($data = mysqli_fetch_assoc($query)) {
            ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['tanggal_lahir'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['telepon'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['posisi'] ?></td>
                    <td><?= $data['tentang_diri'] ?></td>
                </tr>


            <?php } ?>

        </table>


    </div>


</body>

</html>