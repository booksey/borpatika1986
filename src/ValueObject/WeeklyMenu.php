<?php

namespace App\ValueObject;

final class WeeklyMenu
{
    public array $menu;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '37';
        $this->menu = [
            '2023. szeptember 11. hétfő' => [
                'Tárkonyos lencseleves virslivel',
                'Tejszínes, kukoricás csirkés penne',
                'Peach melba',
            ],
            '2023. szeptember 12. kedd' => [
                'Tejszínes gombaleves',
                'Kolbászos rakott burgonya',
                'Kovászos uborka',
            ],
            '2023. szeptember 13. szerda' => [
                'Csirkeaprólék leves',
                'Rántott cukkini rizzsel, tartárral',
                'Piskóta tekercs'
            ],
            '2023. szeptember 14. csütörtök' => [
                'Zöldségkrém leves',
                'Hentes tokány pirított burgonyával',
                'Linzer karika'
            ],
            '2023. szeptember 15. péntek' => [
                'Orja leves',
                'Zöldborsó főzelék sült virslivel',
                'Gesztenye püré'
            ],
            '2023. szeptember 16. szombat' => [
                'Erdei gyümölcsleves',
                'Szezámmagos rántott csirkemell kevert salátával, joghurtos öntettel',
                'Isler'
            ],
            '2023. szeptember 17. vasárnap' => [
                'Tejfölös bableves csipetkével',
                'Alföldi zúzapörkölt galuskával',
                'Savanyúság mix'
            ],
        ];
    }
}
