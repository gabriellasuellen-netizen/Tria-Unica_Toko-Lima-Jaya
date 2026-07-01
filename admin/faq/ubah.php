<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['ubah'])) {

    $id_faq = $_POST['id_faq'];
    $pertanyaan = trim($_POST['pertanyaan']);
    $jawaban = trim($_POST['jawaban']);

    $id_users = $_SESSION['id_users'];

    if ($pertanyaan == '' || $jawaban == '') {
        echo "Semua field wajib diisi.";
        exit;
    }

    $sql = "UPDATE faq
            SET pertanyaan='$pertanyaan',
                jawaban='$jawaban',
                id_users='$id_users'
            WHERE id_faq='$id_faq'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit;
}
