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
                        <div class="accordion-item drinkItem">
                            <button class="accordion-button drinkButton" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $menuId; ?>" aria-expanded="true" aria-controls="<?= $menuId; ?>">
                                <?= ($menu['mainTitle'] ? $menu['mainTitle'] : '') ?>
                            </button>
                            <div id="<?= $menuId; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $menuId; ?>" data-bs-parent="#itallap">
                                <div class="accordion-body">
                                    <table class="table table-mobile-responsive table-mobile-sided">
                                        <thead>
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
                                            $columns = [
                                                0 => '',
                                            ];
                                            ?>
                                            <tr>
                                                <td class="border-0" scope="col"></td>
                                                <?php foreach ($menu['columns'] as $column) { ?>
                                                    <td class="border-0 text-center fw-normal" scope="col">
                                                        <?php
                                                        echo $column;
                                                        $columns[] = $column;
                                                        ?>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($menu['drinks'] as $name => $con) {
                                                $columnCnt = 1;
                                            ?>
                                                <tr>
                                                    <td data-content="" class="border-0" scope="row">
                                                        <?php echo $name; ?>
                                                    </td>
                                                    <?php foreach ($con as $price) { ?>
                                                        <td data-content="<?= $columns[$columnCnt]; ?>" class="text-center border-0 fw-normal">
                                                            <?php echo $price; ?>.-
                                                        </td>
                                                    <?php $columnCnt++;
                                                    } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
