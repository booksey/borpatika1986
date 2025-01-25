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
            '202501201' => [
                'Kolbászos bableves',
                'Velencei spagetti (zöldborsó,bacon,gomba)',
                'Meggyes piskóta',
            ],
            '20250121' => [
                'Orja leves',
                'Tarhonyás hús',
                'Csemege uborka',
            ],
            '20250122' => [
                'Frankfurti leves virslivel',
                'Sajttal töltött csirkemell petrezselymes burgonyával',
                'Lekváros palacsinta',
            ],
            '20250123' => [
                'Palóc leves',
                'Rántott gomba rizzsel, tartárral',
                'Madártej',
            ],
            '20250124' => [
                'Májgombóc leves',
                'Zöldbab főzelék vagdalttal',
                'Gesztenyepüré',
            ],
            '20250125' => [
                'Meleg, fahéjas gyümölcsleves',
                'Diós jércemell szamóca mártással, krokettel',
                'Kevert mákos',
            ],
            '20250126' => [
                'Burgonyakrémleves',
                'Sertés pörkölt szarvacska tésztával',
                'Nutellás gofri',
            ],
        ];

        $this->menuPrice = 2190;
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
