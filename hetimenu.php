<?php
require_once 'header.php';
$weekNumber = '29';
$dailyMenu = [
    '2023. Július 17. hétfő' => [
        'Hideg gyümölcsleves',
        'Rántott gomba rizzsel, tartárral',
        'Tiramisu',
    ],
    '2023. Július 18. kedd' => [
        'Palóc leves',
        'Tejszínes, sonkás, kukoricás spagetti',
        'Peach melba',
    ],
    '2023. Július 19. szerda' => [
        'Húsleves gazdagon',
        'Zöldborsó főzelék tükörtojással',
        'Túrógombóc'
    ],
    '2023. Július 20. csütörtök' => [
        'Színes zöldségleves bacon csipsszel',
        'Bácskai rizseshús',
        'Csalamádé'
    ],
    '2023. Július 21. péntek' => [
        'Burgonyakrémleves virslivel',
        'Csirkemell filé 4 sajt mártással, krokettel',
        'Fahéjas palacsinta'
    ],
    '2023. Július 22. szombat' => [
        'Paradicsom leves betű tésztával',
        'Rántott csirkecomb filé majonézes burgonyasalátával',
        'Piskóta tekercs'
    ],
    '2023. Július 23. vasárnap' => [
        'Erőleves fridatto',
        'Hortobágyi palacsinta',
        'Házi rétes'
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