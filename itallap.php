<?php
require_once 'header.php';
require_once 'drinks.php';
?>

<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <?php foreach ($drinks as $title => $content) { ?>
                <div class="row text-center mb-4 drinkTitleRow">
                    <div class="col-12">
                        <h1 class="drinkTitle"><?php echo strtoupper($title); ?></h1>
                    </div>
                </div>
                <?php foreach ($content['menus'] as $menu) { ?>
                    <div class="row mt-5 mb-3">
                        <div class="col-12">
                            <h2><?php echo $menu['mainTitle']; ?></h2>
                        </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <?php
                        $firstDiv = '4';
                        $secondDiv = '2';
                        switch (count($content['columns'])) {
                            case 5:
                                $firstDiv = '4';
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
                        if ($menu['mainTitle'] == 'VERMUTHOK') {
                            $firstDiv = '8';
                            $secondDiv = '2';
                        }
                        ?>
                        <div class="col-<?php echo $firstDiv; ?>"></div>
                        <?php foreach ($content['columns'] as $column) { ?>
                            <div class="col-<?php echo $secondDiv; ?>">
                                <h4><?php echo $column; ?></h4>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row mt-2 text-center">
                        <?php foreach ($menu['drinks'] as $name => $con) { ?>
                            <div class="col-<?php echo $firstDiv; ?> text-start">
                                <h4><?php echo $name; ?></h4>
                            </div>
                            <?php foreach ($con as $pirce) { ?>
                                <div class="col-<?php echo $secondDiv; ?>">
                                    <h4><?php echo $pirce; ?>.-</h4>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        </div>
    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>