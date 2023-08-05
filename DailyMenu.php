<?php

class DailyMenu
{
    public const WEEK_NUMBER = '31';

    public static function get()
    {
        return [
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
    }
}
