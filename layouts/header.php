<?php
// Mengambil konfigurasi base_url
if (!defined('ROOTPATH')) {
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/test/e-commerce');
}
include ROOTPATH . "/config/config.php";


?>
<!DOCTYPE html>
<html lang="id">

<head>

    <link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Judul Dinamis: Jika variabel $title tidak ada, pakai default -->
    <title><?php echo isset($title) ? $title : "Aurelis Jewelry | Official Store"; ?></title>

    <!-- Google Fonts agar tipografi terlihat modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome untuk ikon sosial media & user -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="../../assets/css/global.css">

    <?php if (isset($page_css)) : ?>
        <link rel="stylesheet" href="../../assets/css/<?= $page_css; ?>.css">
    <?php endif; ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <!-- Link logo selalu kembali ke index utama -->
                <a href="../../modules/main/index.php">
                    <img src="../../assets/imgs/logo.png" alt="Logo">
                </a>
            </div>

            <ul class="nav-links">
                <li><a href="../../modules/main/index.php">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div class="nav-icons">
                <!-- Ikon untuk User/Login -->
                <a href="../../auth/auth.php"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </nav>
    </header>
</body>