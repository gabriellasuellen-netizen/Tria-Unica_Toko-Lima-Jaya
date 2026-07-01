<?php
session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'";

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {

    $data = mysqli_fetch_assoc($query);

    $_SESSION['id_users'] = $data['id_users'];
    $_SESSION['username'] = $data['username'];

    header("Location: admin/dashboard.php");
    exit;
} else {

    header("Location: login.php");
    exit;
}
