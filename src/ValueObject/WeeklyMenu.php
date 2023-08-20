<?php

namespace App\ValueObject;

final class WeeklyMenu
{
    public array $menu;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '34';
        $this->menu = [
            '2023. augusztus 21. hétfő' => [
                'Babgulyás',
                'Sajtos, tejfölös spagetti',
                'Peach melba',
            ],
            '2023. augusztus 22. kedd' => [
                'Zöldség leves',
                'Rántott gomba rizzsel, tartárral',
                'Borpatika kehely',
            ],
            '2023. augusztus 23. szerda' => [
                'Póréhagyma leves',
                'Lyoni sertésszelet burgonyapürével',
                'Kókusz kocka'
            ],
            '2023. augusztus 24. csütörtök' => [
                'Daragaluska leves',
                'Paradicsomos húsgombóc sós burgonyával',
                'Túrós palacsinta'
            ],
            '2023. augusztus 25. péntek' => [
                'Brokkoli krémleves',
                'Sanyi bácsi kedvence pirított burgonyával',
                'Gesztenye golyó'
            ],
            '2023. augusztus 26. szombat' => [
                'Magyaros gombaleves',
                'Sajttal, almával töltött csirkemell zöldséges rizzsel',
                'Vegyes gyümölcs befőtt'
            ],
            '2023. augusztus 27. vasárnap' => [
                'Erdélyi húsleves',
                'Szepesi flekken hagymás tört burgonyával',
                'Savanyúság mix'
            ],
        ];
    }
}
