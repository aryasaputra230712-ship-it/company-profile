<!-- filepath: c:\xampp\htdocs\test\e-commerce\modules\main\index.php -->
<?php
// Perbaikan pada DOCUMENT_ROOT
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/test/e-commerce');
$page_css = "/modules/main";

include ROOTPATH . "/config/config.php";
include ROOTPATH . "/layouts/header.php";

$query = mysqli_query($conn, "SELECT * FROM company_info where id=1");
$info = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Aurelis Jewelry | Official Store"; ?></title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/global.css">
    <?php if (isset($page_css)) : ?>
        <link rel="stylesheet" href="../../assets/css<?php echo $page_css; ?>.css">
    <?php endif; ?>
</head>

<body>
    <!-- Header sudah di-include di atas -->

    <main>
        <div class="container-main">
            <div class="main-intro">
                <video class="video-bg" muted autoplay loop playsinline>
                    <source src="../../assets/videos/mainVideo.mp4" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>

                <div class="intro-content">
                    <p>Mulai bangun masa depan digital Anda bersama kami.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Include footer jika ada -->
    <?php include ROOTPATH . "/layouts/footer.php"; ?>
</body>

</html>