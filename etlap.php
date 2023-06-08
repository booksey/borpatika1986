<?php
require_once 'header.php';
?>
<main id="main">,
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <?php
            $language = $GLOBALS['language'];
            if (in_array($language, ['hu', 'us'], true)) {
                require_once 'etlap_' . $language . '.php';
            }
            ?>
            <?php
            foreach ($menus as $menu) {
                foreach ($menu as $key => $menuContent) {
                    if ($key === 'title') { ?>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mt-3 mb-3"><?php echo $menuContent; ?></h1>
                            <?php } ?>
                            </div>
                            <?php }
                        if ($key === 'menus') {
                            foreach ($menuContent as $name => $price) { ?>
                                <div class="row">
                                    <div class="col-10">
                                        <h3><?php echo $name; ?></h3>
                                    </div>
                                    <div class="col-2 text-end">
                                        <h3><?php echo $price; ?>.-</h3>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                    <?php } ?>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h1><?= $language == 'hu' ? "Az árak köret nélkül értendők!" : " The prices are in HUF, and the Garnishes are not included in the prices!"; ?></h1>
                            <h1><?= $language == 'hu'
                                    ? "Az ételeink allergén anyagokat tartalmazhatnak, kérem érdeklőjenek a rendeléskor!"
                                    : "Dishes may contain allergens, please ask our staff for detailed information when ordering!"; ?></h1>
                        </div>
                    </div>

    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>