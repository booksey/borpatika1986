<?php
if ((empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") && $_SERVER['HTTP_HOST'] != 'localhost') {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Borpatika1986</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" type="text/javascript"></script>

    <!-- nanogallery2 -->
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>

    <script type="text/javascript">
        function languageChange(language) {
            document.cookie = "language=" + language;
            location.reload();
        }
    </script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css?v=1.2" rel="stylesheet">
</head>

<body style="background-color: #2F130C !important">
    <!-- ======= Header ======= -->
    <!-- log line break -->
    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #2F130C !important">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-evenly">
            <a href="index.php" class="logo d-flex align-items-center d-none d-sm-block">
                <!-- <img src="assets/img/logo.jpg" /> -->
                <img src="assets/img/logo_2.png" />
            </a>
            <?php
            $GLOBALS['language'] = 'hu';
            if (in_array($_COOKIE['language'], ['hu', 'gb'], true)) {
                $GLOBALS['language'] = $_COOKIE['language'];
            }
            ?>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/"><i class="bi-house-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Bemutatkozás" : 'About'; ?></a></li>
                    <li><a href="/etlap.php"><i class="bi-cart-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Étlap" : 'Menu'; ?></a></li>
                    <li><a href="/hetimenu.php"><i class="bi-clipboard2-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Heti menü" : 'Weekly menu'; ?></a></li>
                    <li><a href="/album.php"><i class="bi-image-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Fotóalbum" : 'Gallery'; ?></a></li>
                    <li><a href="/itallap.php"><i class="bi-cup-hot-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Itallap" : 'Drinks'; ?></a></li>
                    <li><a href="/rendezvenyek.php"><i class="bi-calendar2-fill"></i><?= $GLOBALS['language'] == 'hu' ? "Rendezvények" : 'Events'; ?></a></li>
                </ul>
            </nav>
            <div class="position-relative d-flex align-items-center">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <a href="https://www.facebook.com/borpatikus" class="ms-3 me-1" target="_blank"><i class="bi-facebook social-media-icon"></i></a>
                <a href="https://twitter.com/borpatika1986" class="mx-2" target="_blank"><i class="bi-twitter social-media-icon"></i></a>
                <a href="https://www.instagram.com/b0rpatika" class="mx-2" target="_blank"><i class="bi-instagram social-media-icon"></i></a>
                <!-- <a href="https://www.tiktok.com/@borpatika19861" class="mx-2" target="_blank"><span class="bi-tiktok"></span></a> -->
                <a href="#" class="mx-2 js-search-open" style="display: none;"><i class="bi-search"></i></a>
                <a href="#" onclick="languageChange('hu'); return false;"><img src="assets/img/Flag_of_Hungary.svg" width="30" height="24" class="mx-1"></a>
                <a href="#" onclick="languageChange('gb'); return false;"><img src="assets/img/Flag_of_the_United_Kingdom.svg" width="30" height="24" class="mx-1"></a>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>
        </div>
    </header><!-- End Header -->