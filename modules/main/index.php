<?php
// Perbaikan pada DOCUMENT_ROOT
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/test/e-commerce');

include ROOTPATH . "/config/config.php";
include ROOTPATH . "/layouts/header.php";

// Asumsikan header.php sudah menutup tag </head> dan membuka <body>
?>

<main>
    <div class="container-main">
        <div class="main-intro">
            <!-- Tambahkan class agar mudah diatur di CSS -->
            <video class="video-bg" muted autoplay loop playsinline>
                <source src="../../assets/videos/mainVideo.mp4" type="video/mp4">
                Browser Anda tidak mendukung video.
            </video>

            <div class="intro-content">
                <!-- Nanti Lorem Ipsum ini diganti dengan data dari database -->
                <p>Mulai bangun masa depan digital Anda bersama kami.</p>
            </div>
        </div>
    </div>
</main>