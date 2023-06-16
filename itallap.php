<?php
require_once 'header.php';
require_once 'drinks.php';
?>

<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="accordion" id="itallap">
                <?php
                $menuCnt = 0;
                foreach ($drinks as $drinkTitle => $menus) { ?>
                    <div class="row text-center mb-4 drinkTitleRow">
                        <div class="col-12">
                            <h1 class="drinkTitle"><?php echo $drinkTitle; ?></h1>
                        </div>
                    </div>
                    <?php foreach ($menus['menus'] as $menu) {
                        $menuId = "menuId" . $menuCnt;
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button style="font-size: 1.5rem!important;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $menuId; ?>" aria-expanded="true" aria-controls="<?= $menuId; ?>">
                                    <?= ($menu['mainTitle'] ? $menu['mainTitle'] : '') ?>
                                </button>
                            </h2>
                            <div id="<?= $menuId; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $menuId; ?>" data-bs-parent="#itallap">
                                <div class="accordion-body">
                                    <div class="row mt-2 text-center">
                                        <?php
                                        //4 columns default
                                        $firstDiv = '4';
                                        $secondDiv = '2';
                                        switch (count($menu['columns'])) {
                                            case 5:
                                                $firstDiv = '4';
                                                $secondDiv = '2';
                                                break;
                                            case 3:
                                                $firstDiv = '6';
                                                $secondDiv = '2';
                                                break;
                                            case 2:
                                                $firstDiv = '8';
                                                $secondDiv = '2';
                                                break;
                                            case 1:
                                                $firstDiv = '10';
                                                $secondDiv = '2';
                                                break;
                                        }
                                        ?>
                                        <div class="col-<?php echo $firstDiv; ?>"></div>
                                        <?php foreach ($menu['columns'] as $column) { ?>
                                            <div class="col-<?php echo $secondDiv; ?>">
                                                <h4 style="font-size: large !important;"><?php echo $column; ?></h4>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row mt-2 text-center">
                                        <?php foreach ($menu['drinks'] as $name => $con) { ?>
                                            <div class="col-<?php echo $firstDiv; ?> text-start">
                                                <h4 style="font-size: large !important;"><?php echo $name; ?></h4>
                                            </div>
                                            <?php foreach ($con as $price) { ?>
                                                <div class="col-<?php echo $secondDiv; ?>">
                                                    <h4 style="font-size: large !important;"><?php echo $price; ?>.-</h4>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php $menuCnt++;
                    } ?>
                        </div>
            </div>
        </div>
    <?php } ?>
    </div>
    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>