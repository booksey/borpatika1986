<?php

namespace App\ValueObject;

final class WeeklyMenu
{
    public array $menu;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '35';
        $this->menu = [
            '2023. augusztus 28. hétfő' => [
                'Kolbászos burgonyaleves',
                'Lecsós csirkemáj sós burgonyával',
                'Puncs szelet',
            ],
            '2023. augusztus 29. kedd' => [
                'Palóc leves',
                'Spagetti carbonara',
                'Hideg gyümölcsrizs',
            ],
            '2023. augusztus 30. szerda' => [
                'Paradicsom leves betű tésztával',
                'Csirkemell csíkok póréhagymás, tejszínes raguval, rizzsel',
                'Meggyes piskóta'
            ],
            '2023. augusztus 31. csütörtök' => [
                'Húsleves cérnametélttel',
                'Bankár csirkemell burgnyapürével',
                'Somlóis palacsinta'
            ],
            '2023. szeptember 01. péntek' => [
                'Lebbencs leves',
                'Rántott karfiol rizzsel, tartárral',
                'Citromos piskóta'
            ],
            '2023. szeptember 02. szombat' => [
                'Francia hagymaleves',
                'Gombával töltött sertésborda kukoricás rizzsel',
                'Keksztekercs'
            ],
            '2023. szeptember 03. vasárnap' => [
                'Zöldborsós csirkeraguleves',
                'Debreceni sertéstokány galuskával',
                'Kovászos uborka'
            ],
        ];
    }
}
