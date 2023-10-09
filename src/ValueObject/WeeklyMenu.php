<?php

namespace App\ValueObject;

use DateInterval;
use DateTime;
use DateTimeZone;
use IntlDateFormatter;

final class WeeklyMenu
{
    public int $menuPrice;
    public array $menu;

    public function __construct()
    {
        $this->menu = [
            '20230924' => [
                'Olasz paradicsomleves',
                'Rántott sertésborda rizibizivel',
                'Tiramisu'
            ],
            '20230925' => [
                'Vegyes gyümölcsleves',
                'Párizsi csirkemell csíkok rizibizivel',
                'Almás rétes'
            ],
            '20230926' => [
                'Magyaros zöldbableves',
                'Csirkepörkölt galuskával',
                'Madártej',
            ],
            '20230927' => [
                'Húsleves cérnametélttel',
                'Milánói sertésborda',
                'Gyümölcs saláta',
            ],
            '20230928' => [
                'Gulyás leves',
                'Túrós csusza',
                'Linzer karika',
            ],
            '20230929' => [
                'Daragaluska leves',
                'Tejfölös zöldbabfőzelék sertés pörkölttel',
                'Kókusz golyó'
            ],
            '20230930' => [
                'Zellerkrémleves',
                'Bakonyi sertéstokány szarvacska tésztával',
                'Csokis palacsinta',
            ],
            '20231001' => [
                'Tejszínes karfiol leves',
                'Hawai csirkemell burgonyapürével',
                'Borpatika kehely',
            ],
            '20231002' => [
                'Palóc leves',
                'Juhtúrós sztrapacska',
                'Alma fahéjas bundában',
            ],
            '20231003' => [
                'Erőleves fridatto',
                'Lecsós sertésszelet rizzsel',
                'Meggyes piskóta',
            ],
            '20231004' => [
                'Jókai bableves',
                'Hortobágyi palacsinta',
                'Isler',
            ],
            '20231005' => [
                'Fahéjas szilvaleves',
                'Pirított csirkemáj sós burgonyával',
                'Kovászos uborka',
            ],
            '20231006' => [
                'Májgombóc leves',
                'Majorannás burgnyafőzelék sült kolbásszal',
                'Túrógombóc',
            ],
            '20231007' => [
                'Színes zöldségleves pirított sonka csíkokkal',
                'Római pulykamell kukoricás rizzsel',
                'Kevert almás',
            ],
            '20231008' => [
                'Zöldborsó leves',
                'Magyaróvári sertésszelet petrezselymes burgonyával',
                'Lekváros palacsinta',
            ],
            '20231009' => [
                'Tárkonyos raguleves',
                'Krumplis tészta',
                'Csemege uborka',
            ],
            '20231010' => [
                'Sárgaborsó leves bacon csipsszel',
                'Szezámmagos rántott csirkemell petrezselymes burgonyával',
                'Piskóta tekercs',
            ],
            '20231011' => [
                'Zöldségkrémleves',
                'Rakott karfiol',
                'Gesztenye golyó',
            ],
            '20231012' => [
                'Pilisi sertésgulyás',
                'Stefánia vagdalt burgonyapürével',
                'Mákos guba',
            ],
            '20231013' => [
                'Húsleves gazdagon',
                'Szemesbab főzelék füstölt hússal',
                'Linzer karika',
            ],
            '20231014' => [
                'Póréhagyma leves',
                'Csirkemell filé 4 sajt mártással, burgonyakrokettel',
                'Szerelmes levél',
            ],
            '20231015' => [
                'Magyaros gombaleves',
                'Mátrai borzaska rizibizivel',
                'Házi rétes',
            ]
        ];
        $this->menuPrice = 1890;
        if (date('Ymd') >= 20231002) {
            $this->menuPrice = 1990;
        }
    }

    public function getMenu(): array
    {
        $menu = [];
        $dates = $this->getWeekDates();
        /** @var DateTime $date */
        foreach ($dates as $date) {
            $dateTitle =  IntlDateFormatter::formatObject(
                $date,
                "Y. MMMM dd. EEEE",
                'hu_HU'
            );
            $dateKey = $date->format('Ymd');
            if (!empty($this->menu[$dateKey])) {
                $menu[$dateTitle] = $this->menu[$dateKey];
            }
        }

        return $menu;
    }

    public function getMenuForDate(DateTime $date): ?array
    {
        $dayToGet = $date->format('Ymd');
        return $this->menu[$dayToGet] ?? null;
    }

    public function getWeekDates(): array
    {
        $weekDates = [];
        $weekStartDateTimeObject = new DateTime('now', new DateTimeZone('Europe/Budapest'));
        $weekStartDateTimeObject->setISODate($this->getYear(), $this->getWeekNumber());
        for ($i = 0; $i < 7; $i++) {
            $weekDates[] = clone $weekStartDateTimeObject;
            $weekStartDateTimeObject->add(new DateInterval('P1D'));
        }
        return $weekDates;
    }

    public function getYear(): int
    {
        $today = new DateTime('now', new DateTimeZone('Europe/Budapest'));
        return intval($today->format('Y'));
    }

    public function getWeekNumber(): int
    {
        $today = new DateTime('now', new DateTimeZone('Europe/Budapest'));
        return intval($today->format('W'));
    }
}
