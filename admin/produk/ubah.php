<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['ubah'])) {

    $id_lowongan = $_POST['id_lowongan'];
    $posisi = trim($_POST['nama_lowongan']);
    $syarat = trim($_POST['syarat']);
    $status = trim($_POST['status']);

    if ($posisi == '' || $syarat == '' || $status == '') {
        echo "Semua field wajib diisi.";
        exit;
    }

    $sql = "UPDATE lowongan 
            SET nama_lowongan='$posisi',
                syarat='$syarat',
                status='$status'
            WHERE id_lowongan='$id_lowongan'";

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
