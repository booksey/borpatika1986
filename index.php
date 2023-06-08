<?php require_once 'header.php'; ?>
<main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/hero1.jpg');">
                                    <div class="img-bg-inner">
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/hero2.jpg');">
                                    <div class="img-bg-inner">
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/hero3.jpg');">
                                    <div class="img-bg-inner">
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/hero4.jpg');">
                                    <div class="img-bg-inner">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <section id="main-content">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <?php
                    $language = $_COOKIE['language'];
                    if (in_array($language, ['hu', 'us'], true)) {
                        require_once 'bemutatkozas_' . $language . '.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>