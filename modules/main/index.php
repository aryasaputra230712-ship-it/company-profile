<?php
if (!defined('ROOTPATH')) {
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/test/e-commerce');
}
$page_css = "/modules/main";

include_once ROOTPATH . "/config/config.php";
// Header sudah berisi <!DOCTYPE html>, <html>, <head>, dan <body>
include_once ROOTPATH . "/layouts/header.php";

$query = mysqli_query($conn, "SELECT * FROM hero_slide WHERE status = 'active'");
$slides = [];
while ($row = mysqli_fetch_assoc($query)) {
    $slides[] = $row;
}
?>

<main>
    <div class="container-main">
        <div class="main-intro">
            <video class="video-bg" muted autoplay loop playsinline>
                <source src="../../assets/videos/mainVideo.mp4" type="video/mp4">
            </video>

            <div class="intro-content">
                <img src="../../assets/imgs/main/logo.png" alt="Logo">
                <h1 id="dynamic-title"><?= $slides[0]['title']; ?></h1>
                <p id="dynamic-subtitle"><?= $slides[0]['subtitle']; ?></p>
            </div>
        </div>
    </div>
</main>

<script>
    window.dataSlides = <?php echo json_encode($slides); ?>;
</script>
<script src="../../assets/js/modules/main.js"></script>

<?php include_once ROOTPATH . "/layouts/footer.php"; ?>