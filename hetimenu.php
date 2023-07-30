<?php
require_once 'header.php';
$weekNumber = '31';
$dailyMenu = [
    '2023. július 31. hétfő' => [
        'Tárkonyos raguleves',
        'Juhtúrós sztrapacska',
        'Gesztenye golyó',
    ],
    '2023. augusztus 1. kedd' => [
        'Gyümölcs leves',
        'Bakonyi csirkemell tokány tésztával',
        'Alma fahéjas bundában',
    ],
    '2023. augusztus 2. szerda' => [
        'Orja leves',
        'Húsos palacsinta rántva rizzsel, tartárral',
        'Napközis piskóta'
    ],
    '2023. augusztus 3. csütörtök' => [
        'Tejfölös bableves',
        'Sertésborda Hentes módra pirított burgonyával',
        'Túrós palacsinta'
    ],
    '2023. augusztus 4. péntek' => [
        'Zöldséges pulykanyak leves',
        'Kelkáposzta főzelék vagdalttal',
        'Kevert almás'
    ],
    '2023. augusztus 5. szombat' => [
        'Magyaros karfiol leves',
        'Óvári sertésszelet rizibizivel',
        'Madártej'
    ],
    '2023. augusztus 6. vasárnap' => [
        'Zellerkrémleves',
        'Csabai karaj hagymás tört burgonyával',
        'Savanyúság mix'
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