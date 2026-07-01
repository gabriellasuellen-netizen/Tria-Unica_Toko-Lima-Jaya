<?php
include "../security.php";
include "../../koneksi.php";

$id_faq = $_GET['id'] ?? '';

if ($id_faq == '') {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM faq WHERE id_faq='$id_faq'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit FAQ</title>
    <link rel="stylesheet" href="../css/edit.css" />
</head>

<body>

    <h1>Edit FAQ</h1>

    <a href="index.php">Kembali</a>

    <br><br>

    <form method="POST" action="ubah.php">

        <input
            type="hidden"
            name="id_faq"
            value="<?= $data['id_faq']; ?>">

        <label>Pertanyaan</label><br>
        <textarea
            name="pertanyaan"
            rows="3"><?= htmlspecialchars($data['pertanyaan']); ?></textarea>

        <br><br>

        <label>Jawaban</label><br>
        <textarea
            name="jawaban"
            rows="6"><?= htmlspecialchars($data['jawaban']); ?></textarea>

        <br><br>

        <button type="submit" name="ubah">
            Edit
        </button>

    </form>

</body>

</html>