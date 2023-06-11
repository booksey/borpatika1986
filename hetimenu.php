<?php
require_once 'header.php';

$dailyMenu = [
    '2023.Június 12. hétfő' => [
        'Kertész leves',
        'Sertésszelet Jóasszony módra pirított burgonyával',
        'Isler',
    ],
    '2023.Június 13. kedd' => [
        'Orja leves',
        'Lecsós szelet rizzsel',
        'Tiramisu',
    ],
    '2023.Június 14. szerda' => [
        'Francia hagymaleves',
        'Bolognai spagetti',
        'Borpatika kehely'
    ],
    '2023.Június 15. csütörtök' => [
        'Erőleves fridatto',
        'Töltött paprika sós burgonyával',
        'Kókusz golyó'
    ],
    '2023.Június 16. péntek' => [
        'Karfiol leves',
        'Csibe brassói kocka burgonyával',
        'Cékla saláta'
    ],
    '2023.Június 17. szombat' => [
        'Májgombóc leves',
        'Mátrai borzaska rizibizivel',
        'Túrógombóc'
    ],
    '2023.Június 18. vasárnap' => [
        'Kolbászos burgonyaleves',
        'Csikós tokány galuskával',
        'Linzer karika'
    ],
];
?>
<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="d-flex flex-row justify-content-center">
                <div>
                    <h1 class="text-center">Heti menü (24.hét) <br />1890.-Ft / nap</h1>
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