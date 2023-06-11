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
    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #2F130C !important">
    <!-- ======= Header ======= -->
    <!-- log line break -->
    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #2F130C !important">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center d-none d-lg-block">
                <img src="assets/img/logo.jpg" />
            </a>
            <?php
            $GLOBALS['language'] = 'hu';
            if (in_array($_COOKIE['language'], ['hu', 'gb'], true)) {
                $GLOBALS['language'] = $_COOKIE['language'];
            }
            ?>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php"><?= $GLOBALS['language'] == 'hu' ? "Bemutatkozás" : 'About'; ?></a></li>
                    <li><a href="etlap.php"><?= $GLOBALS['language'] == 'hu' ? "Étlap" : 'Menu'; ?></a></li>
                    <li><a href="hetimenu.php"><?= $GLOBALS['language'] == 'hu' ? "Heti menü" : 'Weekly menu'; ?></a></li>
                    <li><a href="album.php"><?= $GLOBALS['language'] == 'hu' ? "Fotóalbum" : 'Gallery'; ?></a></li>
                    <li><a href="itallap.php"><?= $GLOBALS['language'] == 'hu' ? "Itallap" : 'Drinks'; ?></a></li>
                    <li><a href="rendezvenyek.php"><?= $GLOBALS['language'] == 'hu' ? "Rendezvények" : 'Events'; ?></a></li>
                </ul>
            </nav>
            <div class="position-relative">
                <a href="https://www.facebook.com/borpatikus" class="mx-2" target="_blank"><span class="bi-facebook"></span></a>
                <a href="https://twitter.com/borpatika1986" class="mx-2" target="_blank"><span class="bi-twitter"></span></a>
                <a href="https://www.instagram.com/b0rpatika" class="mx-2" target="_blank"><span class="bi-instagram"></span></a>
                <a href="https://www.tiktok.com/@borpatika19861" class="mx-2" target="_blank"><span class="bi-tiktok"></span></a>
                <a href="#" class="mx-2 js-search-open" style="display: none;"><span class="bi-search"></span></a>
                <a href="#" onclick="languageChange('hu'); return false;"><i class="flag flag-hu"></i></a>
                <a href="#" onclick="languageChange('gb'); return false;"><i class="flag flag-gb"></i></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

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