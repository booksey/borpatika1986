<?php

class DailyMenu
{
    public const WEEK_NUMBER = '31';

    public static function get()
    {
        return [
            '2023. augusztus 7. hétfő' => [
                'Kertész leves',
                'Szezámmagos rántott csirkemell francia salátával',
                'Lekváros palacsinta',
            ],
            '2023. augusztus 8. kedd' => [
                'Gulyás leves',
                'Pásztor tarhonya',
                'Káposzta saláta',
            ],
            '2023. augusztus 9. szerda' => [
                'Húsleves gazdagon',
                'Zöldborsó főzelék sült virslivel',
                'Almás rétes'
            ],
            '2023. augusztus 10. csütörtök' => [
                'Frankfurti leves',
                'Lecsós szelet rizzsel',
                'Somlói galuska'
            ],
            '2023. augusztus 11. péntek' => [
                'Olasz paradicsom leves',
                'Kapros juhtúróval töltött gomba rizzsel, tartárral',
                'Tiramisu'
            ],
            '2023. augusztus 12. szombat' => [
                'Kolbászos burgonya leves',
                'Dubarry csirkemell burgonyapürével',
                'Borpatika kehely'
            ],
            '2023. augusztus 13. vasárnap' => [
                'Tarhonyaleves',
                'Brassói aprópecsenye pirított burgonyával',
                'Kovászos uborka'
            ],
        ];
    }
}
