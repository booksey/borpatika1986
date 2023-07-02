<?php
require_once 'header.php';
$weekNumber = '27';
$dailyMenu = [
    '2023. Július 2. vasárnap' => [
        'Tejfölös zöldbableves',
        'Sajttal töltött csirkemell zöldséges rizzsel',
        'Almás rétes'
    ],
    '2023. Július 3. hétfő' => [
        'Palóc leves',
        'Mákos tészta',
        'Gyümölcsös vanília puding',
    ],
    '2023. Július 4. kedd' => [
        'Lebbencs leves kolbásszal',
        'Brassói aprópecsenye kocka burgonyával',
        'Gesztenye golyó',
    ],
    '2023. Július 5. szerda' => [
        'Zöldségleves',
        'Pompadur csirkemell krokettel',
        'Meggyes piskóta'
    ],
    '2023. Július 6. csütörtök' => [
        'Orja leves',
        'Házi paprikás burgonya virslivel',
        'Csemege uborka'
    ],
    '2023. Július 7. péntek' => [
        'Paradicsom leves',
        'Rántott csirkemáj hagymás tört burgonyával',
        'Kakaós palacsinta'
    ],
    '2023. Július 8. szombat' => [
        'Brokkoli krémleves',
        'Bundás csirkemell fűszeres tejföllel, sajttal kukoricás rizzsel',
        'Csokis gofri'
    ],
    '2023.Július 9. vasárnap' => [
        'Gomba leves',
        'Holstein szelet petrezselymes burgonyával',
        'Túrógombóc'
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