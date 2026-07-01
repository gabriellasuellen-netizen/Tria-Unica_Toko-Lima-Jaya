<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['simpan'])) {

    $pertanyaan = trim($_POST['pertanyaan']);
    $jawaban = trim($_POST['jawaban']);
    $id_users = $_SESSION['id_users'];

    if ($pertanyaan == '' || $jawaban == '') {
        $error = "Semua field wajib diisi.";
    } else {

        $sql = "INSERT INTO faq (pertanyaan, jawaban, id_users)
                VALUES ('$pertanyaan', '$jawaban', '$id_users')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Data gagal disimpan.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah FAQ</title>
    <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>

    <h1>Tambah FAQ</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <?php if (isset($error)) : ?>
        <p style="color:red;">
            <?= $error; ?>
        </p>
    <?php endif; ?>

    <form method="POST">

        <label>Pertanyaan</label><br>
        <textarea
            name="pertanyaan"
            rows="3"></textarea>

        <br><br>

        <label>Jawaban</label><br>
        <textarea
            name="jawaban"
            rows="6"></textarea>

        <br><br>

        <button type="submit" name="simpan">
            Simpan
        </button>

    </form>

</body>

</html>