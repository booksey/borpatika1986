<?php
require_once 'header.php';
$weekNumber = '30';
$dailyMenu = [
    '2023. július 24. hétfő' => [
        'Májgombóc leves',
        'Erdész szelet rizzsel',
        'Csokis gofri',
    ],
    '2023. július 25. kedd' => [
        'Csülkös bableves',
        'Káposztás tészta',
        'Gesztenyepüré',
    ],
    '2023. július 26. szerda' => [
        'Sajtkrémleves',
        'Csirkepörkölt galuskával',
        'Káposzta saláta'
    ],
    '2023. július 27. csütörtök' => [
        'Gulyás leves',
        'Rántott cukkini rizzsel, tartárral',
        'Borpatika kehely'
    ],
    '2023. július 28. péntek' => [
        'Magyaros burgonyaleves',
        'Székely káposzta',
        'Citromos palacsinta'
    ],
    '2023. július 29. szombat' => [
        'Húsleves csigatésztával',
        'Milánói sertésborda',
        'Gyümölcs saláta'
    ],
    '2023. július 30. vasárnap' => [
        'Francia hagymaleves',
        'Kijevi csirkemell rizibizivel',
        'Meggyes piskóta'
    ],
];
?>
<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="d-flex flex-row justify-content-center">
                <div>
                    <h1 class="text-center">Heti menü (<?= $weekNumber; ?>.hét) <br />1890.-Ft / nap</h1>
                    <br />
                    <?php
                    foreach ($dailyMenu as $day => $menus) { ?>
                        <h1 class="text-center"><strong><?php echo $day; ?></strong></h1>
                        <?php foreach ($menus as $menu) { ?>
                            <h1 class="text-center"><?php echo $menu; ?></h1>
                        <?php } ?>
                        <br /><br />
                    <?php } ?>
                    <br />
                    <h1 class="text-center">(Az allergén összetevőkről érdeklődjön munkatársainknál.)</h1>
                    <h1 class="text-center">Jó étvágyat kívánunk!</h1>
                    <h1 class="text-center">Napi menü 12 órától.</h1>
                    <h1 class="text-center">A menüváltoztatás jogát fenntartjuk</h1>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->
</main><!-- End #main -->
<?php require_once 'footer.php'; ?>