<?php require_once 'header.php';
$images = glob('assets/img/photoalbum/*.jpg');
?>
<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div id="nanogallery2" data-nanogallery2='{
                        "thumbnailHeight": 200,
                        "thumbnailWidth":  200,
                        "thumbnailDisplayTransition": "slideUp2",
                        "thumbnailDisplayTransitionDuration":  500,  
                        "thumbnailDisplayInterval":            30,   
                        "galleryDisplayTransition":            "rotateX",
                        "galleryDisplayTransitionDuration":    500 ,
                        "thumbnailHoverEffect2": "scale120"
                    }'>
                        <?php foreach ($images as $imageSrc) { ?>
                            <a href="<?php echo $imageSrc; ?>" data-ngthumb="<?php echo $imageSrc; ?>"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>