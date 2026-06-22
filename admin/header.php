<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Lima Jaya</title>

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <header class="header">

        <div class="logo">
            Lima <span>Jaya</span>
        </div>

        <div class="user-info">

            <i class="fa-solid fa-circle-user"></i>

            <div class="user-detail">
                <small>Login sebagai</small>
                <span>
                    <?= $_SESSION['username']; ?>
                </span>
            </div>

        </div>

    </header>