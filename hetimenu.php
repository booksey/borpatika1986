<?php
require_once 'header.php';
$weekNumber = '26';
$dailyMenu = [
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
    '2023.Június 26. hétfő' => [
        'Színes zöldségleves pirított sonkacsíkokkal',
        'Spagetti carbonara',
        'Peach melba',
    ],
    '2023.Június 27. kedd' => [
        'Burgonyakrémleves virslivel',
        'Sertés pörkölt galuskával',
        'Káposzta saláta',
    ],
    '2023.Június 28. szerda' => [
        'Húsleves csigatésztával',
        'Rakott karfiol',
        'Vaníliás gofri'
    ],
    '2023.Június 29. csütörtök' => [
        'Zöldborsó leves',
        'Bankár csirkemell petrezselymes burgonyával',
        'Napközis piskóta'
    ],
    '2023.Június 30. péntek' => [
        'Tárkonyos sertésraguleves',
        'Rántott sajt rizzsel,tartárral',
        'Túrós palacsinta'
    ],
    '2023.Július 1. szombat' => [
        'Májgombóc leves',
        'Lyoni sertésszelet burgonyapürével',
        'Kevert almás'
    ],
    '2023.Július 2. vasárnap' => [
        'Tejfölös zöldbableves',
        'Sajttal töltött csirkemell zöldséges rizzsel',
        'Almás rétes'
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