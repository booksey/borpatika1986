<?php
require_once 'header.php';
require_once 'drinks.php';

//TODO: reszponzív itallap oszlopok
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
                        <div class="accordion-item italitem">
                            <button class="accordion-button italbutton" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $menuId; ?>" aria-expanded="true" aria-controls="<?= $menuId; ?>">
                                <?= ($menu['mainTitle'] ? $menu['mainTitle'] : '') ?>
                            </button>
                            <div id="<?= $menuId; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $menuId; ?>" data-bs-parent="#itallap">
                                <div class="accordion-body">
                                    <div class="table table-borderless table-responsive-md">
                                        <table class="table">
                                            <tbody>
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
                                                <tr>
                                                    <td scope="row" class="col-<?php echo $firstDiv; ?> border-0"></td>
                                                    <?php foreach ($menu['columns'] as $column) { ?>
                                                        <td class="col-<?php echo $secondDiv; ?> border-0 text-center">
                                                            <?php echo $column; ?>
                                                        </td>
                                                    <?php } ?>
                                                </tr>

                                    </div>
                                    <div class="table table-borderless table-responsive-md">
                                        <?php foreach ($menu['drinks'] as $name => $con) { ?>
                                            <tr>
                                                <td class="col-<?php echo $firstDiv; ?> text-start border-0">
                                                    <?php echo $name; ?>
                                                </td>
                                                <?php foreach ($con as $price) { ?>
                                                    <td class="col-<?php echo $secondDiv; ?> text-center border-0">
                                                        <?php echo $price; ?>.-
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        </table>
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