<?php

namespace App\ValueObject;

use DateTime;

final class WeeklyMenu
{
    public array $menu;
    public array $menu2;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '38';
        $this->menu2 = [
            '20230917' => [
                'Tejszínes gombaleves',
                'Kolbászos rakott burgonya',
                'Kovászos uborka',
            ],
        ];
        $this->menu = [
            '2023. szeptember 18. hétfő' => [
                'Zöldborsó krémleves',
                'Vasi pecsenye hagymás tört burgonyával',
                'Meggyes-mákos palacsinta',
            ],
            '2023. szeptember 19. kedd' => [
                'Palóc leves',
                'Káposztás tészta',
                'Gyümölcs saláta',
            ],
            '2023. szeptember 20. szerda' => [
                'Erőlevers fridatto',
                'Rakott kel',
                'Gofri'
            ],
            '2023. szeptember 21. csütörtök' => [
                'Zöldség leves',
                'Székely káposzta',
                'Puding tejszínhabbal'
            ],
            '2023. szeptember 22. péntek' => [
                'Tárkonyos pulykaragu leves',
                'Hagymás, gombás csirkemáj burgonyapürével',
                'Napközis piskóta'
            ],
            '2023. szeptember 23. szombat' => [
                'Magyaros burgonyaleves',
                'Töltött csirkecomb tepsis burgonyával',
                'Csalamádé'
            ],
            '2023. szeptember 24. vasárnap' => [
                'Olasz paradicsomleves',
                'Rántott sertésborda rizibizivel',
                'Tiramisu'
            ],
        ];
    }

    public function getMenuForDate(DateTime $date): ?array
    {
        $dayToGet = $date->format('Ymd');
        return $this->menu2[$dayToGet] ?? null;
    }
}
