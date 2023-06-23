<?php
require_once 'header.php';

$dailyMenu = [
    '2023.Június 19. hétfő' => [
        'Palóc leves',
        'Káposztás tészta',
        'Linzer karika',
    ],
    '2023.Június 20. kedd' => [
        'Zöldségkrémleves',
        'Kijevi csirkemell burgonyapürével',
        'Lekváros palacsinta',
    ],
    '2023.Június 21. szerda' => [
        'Tárkonyos lencseleves virslivel',
        'Natur sertésszelet párolt zöldségekkel',
        'Puncs szelet'
    ],
    '2023.Június 22. csütörtök' => [
        'Daragaluska leves',
        'Tejfölös,majorannás burgonyafőzelék sült kolbásszal',
        'Gesztenye püré'
    ],
    '2023.Június 23. péntek' => [
        'Görög gyümölcsleves',
        'Rántott cukkini rizzsel,tartárral',
        'Mascarponés,citromos pohárkrém'
    ],
    '2023.Június 24. szombat' => [
        'Csülkös bableves',
        'Tojásos galuska',
        'Fejes saláta'
    ],
    '2023.Június 25. vasárnap' => [
        'Újházy tyúkhúsleves',
        'Csirkepörkölt szarvacska tésztával',
        'Borpatika kehely'
    ],
];
?>
<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="d-flex flex-row justify-content-center">
                <div>
                    <h1 class="text-center">Heti menü (25.hét) <br />1890.-Ft / nap</h1>
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