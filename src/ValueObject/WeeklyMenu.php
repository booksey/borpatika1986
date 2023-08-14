<?php

namespace App\ValueObject;

final class WeeklyMenu
{
    public array $menu;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '33';
        $this->menu = [
            '2023. augusztus 14. hétfő' => [
                'Palóc leves',
                'Kolbászos rakott burgonya',
                'Csemege uborka',
            ],
            '2023. augusztus 15. kedd' => [
                'Jókai bableves',
                'Káposztás tészta',
                'Somlóis palacsinta',
            ],
            '2023. augusztus 16. szerda' => [
                'Görög gyümölcsleves',
                'Római csirkemell kevert salátával',
                'Piskóta tekercs'
            ],
            '2023. augusztus 17. csütörtök' => [
                'Májgombóc leves',
                'Tejfölös burgonyafőzelék sült kolbásszal',
                'Meggyes rétes'
            ],
            '2023. augusztus 18. péntek' => [
                'Zöldborsó leves',
                'Csirkemell csíkok sörtésztában rizibizivel',
                'Túrógombóc'
            ],
            '2023. augusztus 19. szombat' => [
                'Citromos zöldbableves',
                'Töltött dagadó hagymás tört burgonyával',
                'Uborka saláta'
            ],
            '2023. augusztus 20. vasárnap' => [
                'Orja leves',
                'Sajttal töltött sertésborda petrezselymes burgonyával',
                'Püspök kenyér'
            ],
        ];
    }
}
