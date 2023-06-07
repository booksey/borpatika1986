<?php
require_once 'header.php';

$dailyMenu = [
    '2023.Június 5. hétfő' => [
        'Kolbászos bableves',
        'Sajtos, tejfölös spagetti szalonna pörccel',
        'Gyümölcs saláta',
    ],
    '2023.Június 6. kedd' => [
        'Hideg gyümölcsleves',
        'Roston sült csirkemell kevert salátával',
        'Mákos guba vanília öntettel',
    ],
    '2023.Június 7. szerda' => [
        'Citromos zöldbableves virsli karikákkal',
        'Rántott sajt rizzsel,tartárral',
        'Piskóta tekercs'
    ],
    '2023.Június 8. csütörtök' => [
        'Erdélyi húsleves',
        'Zöldborsó főzelék sült virslivel',
        'Almás rétes'
    ],
    '2023.Június 9. péntek' => [
        'Zellerkrémleves',
        'Sanyi bácsi kedvence petrezselymes burgonyával',
        'Fahéjas palacsinta'
    ],
    '2023.Június 10. szombat' => [
        'Paradicsom leves betű tésztával',
        'Cigány pecsenye hagymás tört burgonyával',
        'Csalamádé'
    ],
    '2023.Június 11. vasárnap' => [
        'Magyaros gombaleves',
        'Sajttal,almával töltött csirkemell rizibizivel',
        'Madártej'
    ],
];
?>
<main id="main">
    <section id="main-content">
        <div class="container-md mt-5" data-aos="fade-in">
            <div class="d-flex flex-row justify-content-center">
                <div>
                    <h1 class="text-center">Heti menü (23.hét) <br />1890.-Ft / nap</h1>
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