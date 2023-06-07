<?php
//TODO: vermutho a rövid italok alá
$drinks = [
    'Kimért borok' => [
        'columns' => ['LITER', 'KISFRÖCCS', 'NAGYFRÖCCS', 'HÁZMESTER'],
        'menus' => [
            [
                'mainTitle' => 'LACZKÓ PINCÉSZET GYÖNGYÖS',
                'drinks' => [
                    'MÁTRAI OLASZRIZLING<br/>(száraz fehér)' => ['1800', '220', '400', '620'],
                    'MÁTRAI CUVÉE<br/>(hárslevelű, félszáraz fehér)' => ['1800', '220',  '400', '620'],
                    'MÁTRAI MUSKOTÁLY <br/>(félédes fehér)' => ['1900', '230', '420', '650'],
                    'MÁTRAI KÉKFRANKOS ROZÉ<br/>(száraz)' => ['2100', '250', '460', '710'],
                    'MÁTRAI KÉKFRANKOS<br/>(száraz)' => ['1900', '230', '420', '650'],
                    'MÁTRAI ZWEIGELT<br/>(félédes)' => ['2000', '240', '440', '680']
                ]
            ],
            [
                'mainTitle' => 'KISS PINCÉSZET TOKAJ',
                'drinks' => [
                    'ZEMPLÉNI FURMINT<br/>(száraz)' => ['2200', '260', '480', '740'],
                    'ZEMPLÉNI HÁRSLEVELŰ<br/>(félédes)' => ['2200', '260', '480', '740'],
                ]
            ],
            [
                'mainTitle' => 'PÓLYA PINCE VILLÁNY',
                'drinks' => [
                    'VILLÁNYI VÖRÖS CUVÉE<br/>(félédes)' => ['2400', '280', '520', '800'],
                ]
            ],
            [
                'mainTitle' => 'GÁLAKER PINCE TOLNA',
                'drinks' => [
                    'TOLNAI CABERNET FRANC<br/>(száraz)' => ['2100', '250', '460', '710'],
                    'TOLNAI CHARDONNAY<br/>(száraz fehér)' => ['2300', '270', '500', '770'],
                ]
            ],
            [
                'mainTitle' => 'VESZTERGOMBI PINCÉSZET SZEKSZÁRD',
                'drinks' => [
                    'SZEKSZÁRDI VÖRÖS CUVÉE<br/>(száraz)' => ['2300', '270', '500', '770'],
                ]
            ],
            [
                'mainTitle' => 'BIBÓK PINCÉSZET',
                'drinks' => [
                    'NESZMÉLYI IRSAI OLIVÉR<br/>(száraz fehér)' => ['2300', '270', '500', '770'],
                    'BALATONBOGLÁRI KÉKFRANKOS ROSÉ<br/>(száraz )' => ['2300', '270', '500', '770'],
                    'CABERNET FRANC<br/>(száraz vörös)' => ['2300', '270', '500', '770'],
                    'SOPRONI KÉKFRANKOS<br/>(száraz vörös)' => ['2000', '240', '440', '680'],
                    'SZEKSZÁRDI ROZÉ<br/>(száraz)' => ['2400', '280', '520', '800'],
                    'NESZMÉLYI OLASZRIZLING<br/>(száraz fehér)' => ['1900', '230', '420', '650'],
                    'NESZMÉLYI CUVÉE<br/>(félédes fehér)' => ['1900', '230', '420', '650'],
                    'MÓRI CHARDONNAY<br/>(száraz fehér)' => ['2300', '270', '500', '770'],
                    'NESZMÉLYI MUSKOTÁLY<br/>(félédes fehér)' => ['2000', '240', '440', '680'],
                ]
            ],
            [
                'mainTitle' => 'VINOTREND KFT.',
                'drinks' => [
                    'BOGDÁN PINCE SOMLÓI JUHFARK' => ['4100', '450', '860', '1310'],
                    'PANNONHALMI OLASZRIZLING' => ['2100', '250', '460', '710'],
                    'LISICZA ZÖLDVELTELINI<br/>(száraz)' => ['2400', '280', '520', '800'],
                    'MOLNÁR GOLD GENEROSA<br/>(száraz)' => ['4600', '500', '960', '1460'],
                    'SZENTPÉTERI NÉRÓ ROSÉ<br/>(száraz)' => ['4400', '480', '960', '1400'],
                ]
            ]
        ]
    ],
    'Palackozott borok' => [
        'columns' => ['Üveg', '1 dl'],
        'menus' => [
            [
                'mainTitle' => 'SZEKSZÁRD VESZTERGOMBI PINCÉSZET',
                'drinks' => [
                    'KÉKFRANKOS' => ['4000', '580'],
                    'CABERNET SAVIGNON' => ['5200', '750'],
                    'MERLOT' => ['5200', '750'],
                    'PINOT NOIR' => ['4300', '620'],
                    'CABERNET FRANC' => ['5200', '750'],
                    'BIKAVÉR' => ['5200', '750'],
                    'KADARKA' => ['5500', '790'],
                    'SHIRAZ' => ['6600', '950'],
                    'TURUL' => ['7300', '1050'],
                    'SILLER' => ['4300', '620'],
                    'ROSE' => ['4300', '620'],
                    'KIRÁLYLEÁNYKA<br/>(fehér)' => ['5200', '750'],
                    'EZERTŐKE<br/>(fehér)' => ['5200', '750'],
                ]
            ],
            [
                'mainTitle' => 'GYÖNGYÖS LACZKÓ PINCÉSZET',
                'drinks' => [
                    'MÁTRAI OLASZRIZLING' => ['2100', '300'],
                    'MÁTRAI RAJNAI RIZLING' => ['2400', '350'],
                    'MÁTRAI MUSKOTÁLY' => ['2600', '380'],
                    'MÁTRAI ROZÉ' => ['2600', '380'],
                    'MÁTRAI KÉKFRANKOS' => ['2600', '380'],
                    'MÁTRAI ZWEIGELT' => ['2600', '380'],
                ]
            ],
            [
                'mainTitle' => 'TOLNA KISS PINCÉSZET',
                'drinks' => [
                    'TOLNAI CHARDONNAY' => ['2600', '380'],
                    'TOLNAI ROZÉ' => ['2600', '380'],
                    'TOLNAI CABARNET' => ['2600', '380'],
                    'TOLNAI KÉKFRANKOS' => ['2600', '380'],
                ]
            ],
            [
                'mainTitle' => 'VILLÁNY PÓLYA PINCÉSZET',
                'drinks' => [
                    'VÖRÖS CUVÉE' => ['3100', '450'],
                ]
            ],
            [
                'mainTitle' => 'TOKAJ KISS ISTVÁN PINCÉSZET',
                'drinks' => [
                    'TOKAJI FURMINT<br/>(száraz)' => ['4000', '580'],
                    'TOKAJI FURMINT<br/>(félédes)' => ['4000', '580'],
                    'TOKAJI HÁRSLEVELŰ' => ['4000', '580'],
                    'TOKAJI SÁRGAMUSKOTÁLY' => ['4300', '620'],
                    'TOKAJI SZAMORODNI<br/>(száraz)' => ['5400', '780'],
                    'TOKAJI SZAMORODNI<br/>(édes)' => ['5400', '780'],
                    'TOKAJI ASZÚ<br/>(5 puttonyos)' => ['9000', '1290'],
                ]
            ],
            [
                'mainTitle' => 'BALATON-SOMLÓ BOGDÁN PINCÉSZET',
                'drinks' => [
                    'SOMLÓI JUHFARK' => ['5400', '780'],
                ]
            ],
            [
                'mainTitle' => 'BIBÓK PINCÉSZET',
                'drinks' => [
                    'NESZMÉLYI IRSAI OLIVÉR GYÖNGYÖZŐ BOR' => ['2900', '420'],
                    'SAVIGNON BLANC' => ['4300', '620'],
                ]
            ]
        ]
    ],
    'Desszert borok' => [
        'columns' => ['1 dl'],
        'menus' => [
            [
                'drinks' => [
                    'MANDULÁS' => ['750'],
                    'DIÓS' => ['750'],
                    'ALMÁS. FAHÉJAS' => ['750'],
                    'ÜRMÖS' => ['750'],
                    'JÉGSZER' => ['750'],
                    'MEGGYES' => ['750'],
                    'SZILVÁS' => ['750'],
                    'FÜGÉS' => ['750'],
                    'MAZSOLÁS' => ['750'],
                    'CSIPKEBOGYÓS' => ['750'],
                    'KINGSWOOD CIDER' => ['1050'],
                    'STRONGBOW CIDER' => ['1050'],
                ]
            ]
        ]
    ],
    'Pezsgők' => [
        'columns' => ['Üveg', '1 dl'],
        'menus' => [
            [
                'drinks' => [
                    'BB DRY SZÁRAZ' => ['3000', '440'],
                    'BB SEMI-DRY FÉLSZÁRAZ' => ['3000', '440'],
                    'BB FÉLÉDES' => ['3000', '440'],
                    'BB MUSKOTÁLYOS' => ['3000', '440'],
                    'TÖRLEY CHARMANT DOUX' => ['3200', '460'],
                ]
            ]
        ]
    ],
    'Rövid italok' => [
        //TODO: vermuth első
        'columns' => ['2 cl', '3 cl', '4 cl', '5 cl'],
        'menus' => [
            [
                'mainTitle' => 'VERMUTHOK',
                'drinks' => [
                    'MARTINI DRY' => ['1100'],
                ]
            ],
            [
                'mainTitle' => 'SZESZES ITALOK',
                'drinks' => [
                    'BAKTEROV<br/>(barack, szilva, körte, vegyes) - 33%' => ['240', '360', '480', '600'],
                ]
            ],
        ]
    ],
    //TODO: sörök alcsoport mint a boroknál
    'Sörök' => [
        'columns' => ['Üveg'],
        'menus' => [
            [
                'mainTitle' => 'PALACKOS SÖRÖK',
                'drinks' => [
                    'MGÖSSER Special 0.5' => ['750'],
                ]
            ],
        ]
    ],
    //TODO: ásvánvizk is ide 
    'Üdítő italok' => [
        'columns' => ['1 dl'],
        'menus' => [
            [
                'mainTitle' => 'ROSTOS ÜDÍTŐK',
                'drinks' => [
                    'PARADICSOM 100%' => ['200'],
                ]
            ],
        ]
    ],
    'Energia italok' => [
        'columns' => ['0.25 dobozos'],
        'menus' => [
            [
                'drinks' => [
                    'BOMBA' => ['600'],
                ]
            ],
        ]
    ],
    'Kávék / teák' => [
        'columns' => ['ár'],
        'menus' => [
            [
                'mainTitle' => 'Kávék',
                'drinks' => [
                    'ESPRESSO' => ['450'],
                    'KÁVÉ TEJSZÍNNEL' => ['490'],
                    'KÁVÉ TEJSZÍNHABBAL' => ['520'],
                    'HOSSZÚ KÁVÉ' => ['450'],
                    'CAPPUCCINO' => ['570'],
                    'MACCHIATO' => ['620'],
                    'FORRÓ CSOKI' => ['650'],
                    'JEGESKÁVÉ' => ['850'],
                ]
            ],
            [
                'mainTitle' => 'Teák',
                'drinks' => [
                    'GYÜMÖLCS TEÁK' => ['390'],
                    'LIPTON SÁRGA' => ['390'],
                    'LIPTON EARL GRAY' => ['390'],
                    'ZÖLD TEÁK' => ['390'],
                ]
            ],
            [
                'mainTitle' => 'Kiegészítők',
                'drinks' => [
                    'TEJSZÍN' => ['50'],
                    'ADAG TEJSZÍNHAB' => ['80'],
                    'KIS MÉZ' => ['200'],
                ]
            ],
        ]
    ],
];
