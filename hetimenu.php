<?php
require_once 'header.php';
$weekNumber = '28';
$dailyMenu = [
    '2023.Július 9. vasárnap' => [
        'Gomba leves',
        'Holstein szelet petrezselymes burgonyával',
        'Túrógombóc'
    ],
    '2023. Július 10. hétfő' => [
        'Jókai bableves',
        'Túrós csusza',
        'Gyümölcs kehely',
    ],
    '2023. Július 11. kedd' => [
        'Zöldborsós csirkeragu leves',
        'Gombapaprikás galuskával',
        'Püspök kenyér',
    ],
    '2023. Július 12. szerda' => [
        'Karfiol leves',
        'Rántott sertésszelet kevert salátával, fokhagymás,joghurtos öntettel',
        'Meggyes rétes'
    ],
    '2023. Július 13. csütörtök' => [
        'Daragaluska leves',
        'Tejfölös zöldbabfőzelék sertés pörkölttel',
        'Szerelmes levél'
    ],
    '2023. Július 14. péntek' => [
        'Hideg gyümölcsleves',
        'Vadas csirkemell tésztával',
        'Tiramisu'
    ],
    '2023. Július 15. szombat' => [
        'Frankfurti leves',
        'Sült csirkecomb petrezselymes burgonyával',
        'Savanyúság mix'
    ],
    '2023. Július 16. vasárnap' => [
        'Újházy tyúkhúsleves',
        'Stefánia vagdalt burgonyapürével',
        'Kókusz golyó'
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