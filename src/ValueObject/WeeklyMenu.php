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
            ],
            '20231016' => [
                'Palóc leves',
                'Sajtos, tejfölös spagetti szalonna pörccel',
                'Gyümölcs saláta',
            ],
            '20231017' => [
                'Frankfurti leves',
                'Kolbászos pásztor tarhonya',
                'Gesztenyepüré',
            ],
            '20231018' => [
                'Paradicsom leves betű tésztával',
                'Sült csirkecomb petrezselymes burgonyával',
                'Káposzta saláta',
            ],
            '20231019' => [
                'Brokkoli krémleves bacon csipsszel',
                'Csirkemell csíkok vadasan szarvacska tésztával',
                'Kakaós palacsinta',
            ],
            '20231020' => [
                'Frankfurti leves',
                'Rántott cukkini rizzsel, tartárral',
                'Puncs szelet',
            ],
            '20231021' => [
                'Citromos zöldbableves virslivel',
                'Csülök Pékné módra pirított burgonyával',
                'Savanyúság mix',
            ],
            '20231022' => [
                'Erdélyi húsleves',
                'Kijevi csirkemell rizibizivel',
                'Túrógombóc',
            ],
            '20231023' => [
                'Zöldborsós szárnyasraguleves',
                'Sajttal töltött sertésborda petrezselymes burgonyával',
                'Tiramisu',
            ],
            '20231024' => [
                'Majorannás burgonyaleves',
                'Bácskai rizseshús',
                'Csalamádé',
            ],
            '20231025' => [
                'Pilisi sertésgulyás',
                'Káposztás tészta',
                'Gyümölcs saláta',
            ],
            '20231026' => [
                'Francia hagymaleves',
                'Húsos palacsinta rántva rizibizivel, tartárral',
                'Almás rétes',
            ],
            '20231027' => [
                'Tejfölös bableves csipetkével',
                'Csibe brassói pirított burgonyával',
                'Kevert mákos',
            ],
            '20231028' => [
                'Sütőtök krémleves',
                'Sajttal, almával töltött csirkemell burgonyapürével',
                'Halloween gofri',
            ],
            '20231029' => [
                'Májgombóc leves',
                'Lecsós szelet rizzsel',
                'Linzer karika',
            ],
            '20231030' => [
                'Babgulyás',
                'Túrós csusza',
                'Borpatika kehely',
            ],
            '20231031' => [
                'Karfiol leves',
                'Szepesi flekken hagymás tört burgonyával',
                'Alma paprika',
            ],
            '20231101' =>  [
                'Meleg,fahéjas almaleves',
                'Pompadur csirkemell burgonya krokettel',
                'Csokis pohárkrém',
            ],
            '20231102' => [
                'Csurgatott tojásleves',
                'Házi disznótoros hagymás tört burgonyával, párolt káposztával',
                'Puding tejszínhabbal',
            ],
            '20231103' => [
                'Daragaluska leves',
                'Lencse főzelék füstölt hússal',
                'Meggyes, mákos palacsinta',
            ],
            '20231104' => [
                'Palóc leves',
                'Tejszínes, gombás sertéstokány tésztával',
                'Házi rétes',
            ],
            '20231105' => [
                'Őszi zöldségleves',
                'Holstein szelet petrezselymes burgonyával',
                'Gesztenye püré',
            ],

            '20231106' => [
                'Erdélyi húsleves',
                'Bolognai spagetti',
                'Gyümölcs saláta',
            ],
            '20231107' => [
                'Zöldborsó leves vajas galuskával',
                'Hússal töltött palacsinta rántva rizzsel, tartárral',
                'Isler',
            ],
            '20231108' => [
                'Kolbászos burgonyaleves',
                'Székely káposzta',
                'Kókusz golyó',
            ],
            '20231109' => [
                'Erőleves fridatto',
                'Paradicsomos húsgombóc sós burgonyával',
                'Meggyes piskóta',
            ],
            '20231110' => [
                'Lebbencs leves',
                'Tejfölös zöldbabfőzelék sertés pörkölttel',
                'Piskóta tekercs',
            ],
            '20231111' => [
                'Libaleves lúdgége tésztával',
                'Ludas kása',
                'Napközis piskóta',
            ],
            '20231112' => [
                'Zellerkrémleves',
                'Sajttal töltött csirkemell petrezselymes burgonyával',
                'Káposzta saláta',
            ],
            '20231113' => [
                'Húsleves cérnametélttel',
                'Kolbászos rakott burgonya',
                'Csemege uborka',
            ],
            '20231114' => [
                'Tejfölös bableves',
                'Csirkepörkölt orsó tésztával',
                'Borpatika kehely',
            ],
            '20231115' => [
                'Paradicsom leves betű tésztával',
                'Bankár csirkemell rizibizivel',
                'Fahéjas palacsinta',
            ],
            '20231116' => [
                'Brokkolikrémleves1',
                'Rántott sajt rizzsel, tartárral',
                'Gesztenye golyó',
            ],
            '20231117' => [
                'Májgombóc leves',
                'Szemes babfőzelék füstölt tarjával',
                'Kókusz kocka',
            ],
            '20231118' => [
                'Tejfölös zöldbableves',
                'Lyoni sertésszelet petrezselymes burgonyával',
                'Nutellás gofri',
            ],
            '20231119' => [
                'Frankfurti leves',
                'Rántott csirkecomb filé burgonyapürével',
                'Csalamádé',
            ],
            '20231120' => [
                'Jókai bableves',
                'Krumplis tészta',
                'Csemege uborka',
            ],
            '20231121' => [
                'Kertész leves',
                'Kapros, gombás csirkeragu rizzsel',
                'Fahéjas palacsinta',
            ],
            '20231122' => [
                'Pilisi sertésgulyás',
                'Tejfölös burgonyafőzelék sült kolbásszal',
                'Gyümölcs saláta',
            ],
            '20231123' => [
                'Sajtkrémleves',
                'Rántott sertésborda gombás rizzsel',
                'Túrógombóc',
            ],
            '20231124' => [
                'Daragaluska leves',
                'Csibe brassói pirított burgonyával',
                'Cékla saláta',
            ],
            '20231125' => [
                'Tárkonyos burgonyaleves',
                'Hentes szelet rizzsel',
                'Almás rétes',
            ],
            '20231126' => [
                'Francia hagymaleves',
                'Csirkemell filé 4 sajt mártással, krokettel',
                'Tiramisu',
            ],
            '20231127' => [
                'Orja leves',
                'Hortobágyi palacsinta',
                'Puncs szelet',
            ],
            '20231128' => [
                'Fokhagyma krémleves',
                'Csirkepörkölt galuskával',
                'Savanyúság mix',
            ],
            '20231129' => [
                'Magyaros gombaleves',
                'Cigány pecsenye hagymás tört burgonyával',
                'Keksztekercs',
            ],
            '20231130' => [
                'Májgombóc leves',
                'Rántott karfiol rizzsel, tartárral',
                'Meggyes piskóta',
            ],
            '20231201' => [
                'Borjúraguleves',
                'Zöldborsó főzelék tükör tojással',
                'Túrós palacsinta',
            ],
            '20231202' => [
                'Zellerkrémleves',
                'Bakonyi pulykatokány tésztával',
                'Borpatika kehely',
            ],
            '20231203' => [
                'Húsleves cérnametélttel',
                'Sajttal, baconnal töltött sertésborda petrezselymes burgonyával',
                'Gesztenyepüré',
            ],
            '20231204' => [
                'Téli zöldségleves',
                'Stefánia vagdalt burgonyapürével',
                'Káposzta saláta',
            ],
            '20231205' => [
                'Palóc leves',
                'Túrós csusza tepertővel',
                'Puncs szelet',
            ],
            '20231206' => [
                'Tejfölös zöldbableves',
                'Lecsós csirkemáj sós burgonyával',
                'Citromos palacsinta',
            ],
            '20231207' => [
                'Orja leves',
                'Sült csirkecomb petrezselymes burgonyával',
                'Kevert mákos',
            ],
            '20231208' => [
                'Karfiol krémleves',
                'Bácskai rizseshús',
                'Piskóta tekercs',
            ],
            '20231209' => [
                'Zöldborsó leves vajas galuskával',
                'Gombával töltött sertésszelet rizzsel',
                'Mogyorókrémes gofri',
            ],
            '20231210' => [
                'Tejfölös bableves csipetkével',
                'Kukoricás, sonkás csirkeragu penne tésztával',
                'Napközis piskóta',
            ],
            '20231211' => [
                'Orja leves',
                'Szárnyasmáj rizottó',
                'Rakott palacsinta',
            ],
            '20231212' => [
                'Zöldségkrémleves',
                'Párizsi csirkemell csíkok gombás rizzsel',
                'Gesztenye golyó',
            ],
            '20231213' => [
                'Kertész leves',
                'Szepesi flekken hagymás tört burgonyával',
                'Túrógombóc',
            ],
            '20231214' => [
                'Daragaluska leves',
                'Tarhonyás hús',
                'Csemege uborka',
            ],
            '20231215' => [
                'Gulyás leves',
                'Káposztás tészta',
                'Gyümölcs saláta',
            ],
            '20231216' => [
                'Meleg, fahéjas szilvaleves',
                'Bankár csirkemell petrezselymes burgonyával',
                'Kókusz kocka',
            ],
            '20231217' => [
                'Magyaros burgonyaleves kolbásszal',
                'Fetával, olivával töltött sertésszelet rizibizivel',
                'Kókusz golyó',
            ],
            '20231218' => [
                'Magyaros gombaleves',
                'Csirkepörkölt galuskával',
                'Savanyúság mix',
            ],
            '20231219' => [
                'Orja leves',
                'Zöldbab főzelék vagdalttal',
                'Puncs szelet',
            ],
            '20231220' => [
                'Tárkonyos raguleves',
                'Sajtos, tejfölös spagetti szalonna pörccel',
                'Borpatika kehely',
            ],
            '20231221' => [
                'Tejszínes karfiol leves',
                'Rántott sajt kukoricás rizzsel, tartárral',
                'Lekváros palacsinta',
            ],
            '20231222' => [
                'Daragaluska leves',
                'Csülök Pékné módra kocka burgonyával',
                'Alma paprika',
            ],
            '20231223' => [
                'Olasz paradicsom leves',
                'Töltött káposzta',
                'Beigli',
            ],
            '20231224' => [
                'A megrendelt ételek elvitele 12 óráig'
            ],
            '20231227' => [
                'Babgulyás',
                'Rántott cukkini rizzsel, tartárral',
                'Fahéjas palacsinta'
            ],
            '20231228' => [
                'Zöldborsó leves',
                'Milánói sertésborda',
                'Alma fahéjas bundában',
            ],
            '20231229' => [
                'Gulyás leves',
                'Juhtúrós sztrapacska',
                'Gyümölcsös vanília puding',
            ],
            '20231230' => [
                'Tejfölös burgonyaleves virslivel',
                'Bakonyi csirkemell tokány szarvacska tésztával',
                'Piskóta tekercs',
            ],
            '20231231' => [
                'Májgombóc leves',
                'Malac sült párolt káposztával, tepsiben sült burgonyával',
                'Gesztenye püré',
            ],
            '20240101' => [
                'Zöldség leves',
                'Lencsefőzelék füstölt hússal',
                'Tiramisu',
            ],
            '20240102' => [
                'Húsleves gazdagon',
                'Libazúza pörkölt galuskával',
                'Csemege uborka',
            ],
            '20240103' => [
                'Tejfölös zöldbableves',
                'Lecsós csirkemáj sós burgonyával',
                'Kókusz golyó',
            ],
            '20240104' => [
                'Zellerkrémleves',
                'Rántott csirkemell rizibizivel',
                'Túrógombóc',
            ],
            '20240105' => [
                'Palóc leves',
                'Bolognai spagetti',
                'Gyümölcs saláta',
            ],
            '20240106' => [
                'Daragaluska leves',
                'Rántott gomba rizzsel, tartárral',
                'Csokis palacsinta',
            ],
            '20240107' => [
                'Magyaros burgonyaleves kolbásszal',
                'Mustáros flekken hagymás tört burgonyával',
                'Savanyúság mix',
            ],
            '20240108' => [
                'Sajtkrémleves',
                'Paradicsomos húsgombóc sós burgonyával',
                'Piskóta tekercs',
            ],
            '20240109' => [
                'Kertész leves',
                'Rántott sertésszelet majonézes burgonya salátával',
                'Tiramisu',
            ],
            '20240110' => [
                'Zöldborsós szárnyasraguleves',
                'Túrós csusza',
                'Borpatika kehely',
            ],
            '20240111' => [
                'Húsleves csiga tésztával',
                'Székely káposzta',
                'Lekváros palacsinta',
            ],
            '20240112' => [
                'Magyaros gomba leves',
                'Zöldborsó főzelék sült virslivel',
                'Kókusz kocka',
            ],
            '20240113' => [
                'Karfiol leves',
                'Sertéspörkölt galuskával',
                'Cékla saláta',
            ],
            '20240114' => [
                'Brokkoli krémleves',
                'Kijevi csirkemell kukoricás rizzsel',
                'Almás rétes',
            ],
            '20240115' => [
                'Orja leves',
                'Kolbászos pásztortarhonya',
                'Csemege uborka',
            ],
            '20240116' => [
                'Gulyás leves',
                'Mákos metélt',
                'Gesztenye püré',
            ],
            '20240117' => [
                'Újházy tyúkhúsleves',
                'Rakott káposzta',
                'Fahéjas palacsinta',
            ],
            '20240118' => [
                'Olasz paradicsomleves',
                'Rántott karfiol rizzsel, tartárral',
                'Napközis piskóta',
            ],
            '20240119' => [
                'Színes zöldségleves bacon csipsszel',
                'Kolbászos paprikás burgonya',
                'Puding tejszínhabbal',
            ],
            '20240120' => [
                'Erőleves fridatto',
                'Vadas csirketokány spagettivel',
                'Meggyes piskóta',
            ],
            '20240121' => [
                'Tejfölös bableves csipetkével',
                'Sajttal töltött sertésborda petrezselymes burgonyával',
                'Rakott mákos süti',
            ],
            '20240122' => [
                'Tárkonyos raguleves',
                'Tejfölös burgonyafőzelék sült kolbásszal',
                'Kókusz kocka',
            ],
            '20240123' => [
                'Zöldborsó leves',
                'Brassói apró pecsenye pirított burgonyával',
                'Alma paprika',
            ],
            '20240124' => [
                'Zellerkrémleves',
                'Sült csirkecomb petrezselymes burgonyával',
                'Túrós palacsinta',
            ],
            '20240125' => [
                'Csülkös bableves',
                'Kolbászos rakott burgonya',
                'Gesztenye golyó',
            ],
            '20240126' => [
                'Pilisi sertésgulyás',
                'Túrós csusza',
                'Borpatika kehely',
            ],
            '20240127' => [
                'Magyaros karfiol leves',
                'Diós jércemell szamóca mártással, krokettel',
                'Almás rétes',
            ],
            '20240128' => [
                'Orja leves',
                'Sertés pörkölt galuskával',
                'Cékla saláta',
            ],
            '20240129' => [
                'Kertész leves',
                'Kijevi csirkemell rizibizivel',
                'Lekváros palacsinta',
            ],
            '20240130' => [
                'Kolbászos tarhonya leves',
                'Csikós tokány galuskával',
                'Madár tej',
            ],
            '20240131' => [
                'Meleg, fahéjas gyümölcsleves',
                'Rántott sajt rizzsel, tartárral',
                'Túrógombóc',
            ],
            '20240201' => [
                'Újházy tyúkhúsleves',
                'Zöldborsó főzelék sült virslivel',
                'Hideg gyümölcsrizs',
            ],
            '20240202' => [
                'Palóc leves',
                'Sajtos, tejfölös spagetti szalonna pörccel',
                'Gesztenye püré',
            ],
            '20240203' => [
                'Olasz paradicsom leves',
                'Bankár csirkemell petrezselymes burgonyával',
                'Káposzta saláta',
            ],
            '20240204' => [
                'Citromos zöldbableves virsli karikákkal',
                'Lyoni sertés tarja burgonya pürével',
                'Gesztenye püré',

            ],
            '20240205' => [
                'Májgombóc leves',
                'Székely káposzta',
                'Nutellás gofri'
            ],
            '20240206' => [
                'Zöldborsó leves vajas galuskával',
                'Rántott gomba rizzsel, tartárral',
                'Túrós palacsinta',
            ],
            '20240207' => [
                'Színes zöldségleves pirított sonka csíkokkal',
                'Szemes babfőzelék füstölt hússal',
                'Püspök kenyér',
            ],
            '20240208' => [
                'Burgonya krémleves bacon csipsszel',
                'Bácskai rizseshús',
                'Kovászos uborka',
            ],
            '20240209' => [
                'Zöldborsós csirkeragu leves',
                'Spagetti carbonara',
                'Puding tejszínhabbal',
            ],
            '20240210' => [
                'Orja leves',
                'Bakonyi sertésszelet galuskával',
                'Piskóta tekercs',
            ],
            '20240211' => [
                'Póréhagyma leves',
                'Rántott csirkemell kukoricás rizzsel',
                'Tiramisu',
            ],
            '20240212' => [
                'Tejfölös bableves csipetkével',
                'Rántott csirkemáj rizibizivel',
                'Csalamádé',
            ],
            '20240213' => [
                'Tejszínes gombaleves',
                'Vasi pecsenye hagymás tört burgonyával',
                'Kókusz golyó',
            ],
            '20240214' => [
                'Zellerkrémleves',
                'Sajttal, almával töltött csirkemell sonkás rizzsel',
                'Gesztenye szív',
            ],
            '20240215' => [
                'Daragaluska leves',
                'Tejfölös zöldbabfőzelék sertés pörkölttel',
                'Lekváros palacsinta',
            ],
            '20240216' => [
                'Gulyás leves',
                'Túrós csusza',
                'Gyümölcs saláta',
            ],
            '20240217' => [
                'Frankfurti leves',
                'Brassói pirított burgonyával',
                'Savanyúság mix',
            ],
            '20240211' => [
                'Majorannás burgonyaleves',
                'Mézes, mustáros csirkecomb burgonyapürével',
                'Házi rétes',
            ],
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
