<?php

namespace App\ValueObject;

final class WeeklyMenu
{
    public array $menu;
    public string $weekNumber;

    public function __construct()
    {
        $this->weekNumber = '36';
        $this->menu = [
            '2023. szeptember 04. hétfő' => [
                'Kertész leves',
                'Csirkepörkölt szarvacska tésztával',
                'Túrós rétes',
            ],
            '2023. szeptember 05. kedd' => [
                'Tejfölös zöldbab leves',
                'Tarhonyás hús',
                'Gyümölcs saláta tejszínhabbal',
            ],
            '2023. szeptember 06. szerda' => [
                'Májgombóc leves',
                'Párizsi sertésszelet rizibizivel',
                'Káposzta saláta'
            ],
            '2023. szeptember 07. csütörtök' => [
                'Pilisi sertésgulyás',
                'Szárnyasmáj rizottó',
                'Mákos guba'
            ],
            '2023. szeptember 08. péntek' => [
                'Fokhagyma krémleves',
                'Pirosra sült csülök sztrapacskával',
                'Alma fahéjas bundában'
            ],
            '2023. szeptember 09. szombat' => [
                'Zöldborsó leves vajas galuskával',
                'Csibe brassói pirított burgonyával',
                'Csemege uborka'
            ],
            '2023. szeptember 10. vasárnap' => [
                'Májgombóc leves',
                'Cigány pecsenye hagymás tört burgonyával',
                'Lekváros palacsinta'
            ],
        ];
    }
}
