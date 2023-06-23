<?php
require_once 'header.php';
?>
<main id="main">,
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <?php
            $language = $GLOBALS['language'];
            if (in_array($language, ['hu', 'gb'], true)) {
                require_once 'etlap_' . $language . '.php';
            }
            ?>
            <div class="accordion" id="etlap">
                <?php
                $menuCnt = 0;
                foreach ($menus as $menu) {
                    foreach ($menu as $key => $menuContent) {
                        if ($key === 'title') {
                            $menuCnt++;
                            $title = "collapseId" . $menuCnt; ?>
                            <div class="accordion-item">
                                <h1 class="mt-3 mb-3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $title; ?>" aria-expanded="true" aria-controls="<?php echo $title; ?>">
                                        <span class="accordion-title"><?php echo $menuContent; ?></span>
                                    </button>
                                </h1>
                                <div id="<?php echo $title; ?>" class="accordion-collapse collapse <?= ($menuCnt === 1) ? "show" : ""; ?> data-bs-parent=" #etlap">
                                <?php }
                                ?>
                                <?php
                                if ($key === 'menus') {
                                    foreach ($menuContent as $name => $price) { ?>
                                        <div class="accordion-body pb-2">
                                            <div class="table table-borderless table-responsive-sm">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row" class="border-0 text-start"><?php echo $name; ?></td>
                                                            <td class="align-right border-0 text-end"><?php echo $price . ".-"; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php } ?><?php
                                        } ?>

                            </div>
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