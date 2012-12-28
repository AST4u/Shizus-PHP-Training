<?php
/**
 * Arrays: Listen - Einleitung
 * User: nanashiRei
 * Date: 28.12.12
 * Time: 20:00
 *
 *
 * Arrays werden in 2 Arten aufgeteilt:
 * - Listen
 * - Assoziative Arrays (Hash-list)
 *
 *
 */

$array = array();
$array = [];


$liste1 = ['Hallo', 'Welt'];
echo $liste1[0] . ' ' . $liste1[1] . 'Hallo Otto.';


$liste2 = ['dies', 'das', 'und', 'jenes', 123, 456];

$liste2 = [[1,2],[3,4]];

/*
 * [ [1,2] , [3,4] ]
 *
 *
 */

echo $liste2[0][1]; // 2
echo $liste2[1][0]; // 3

$variable = "Wert";

/*
 * Person:
 *   Tiere
 *   Alter
 *   Wohnort
 *
 * Person = [Tiere, Alter, Wohnort]
 */

$personen = [


    // $personen[0]
    [
        // $personen[0][0]
        [
            // $personen[0][0][0]
            'Katze'
        ],
        45,
        'Gattikon (Schweiz)'
    ],



    [
        [
            'Katze',
            'Hund'
        ],
        20,
        'Hildesheim'
    ],



    [
        [],
        10,
        'Bei den Eltern'
    ]

];

// Gebe wohnort von person 2 aus
echo $personen[1][2]; // Hildesheim

// Gebe den Wohnort aller personen aus
$count = count($personen);
for ($i = 0; $i < $count; $i++){
    echo $personen[$i][2];
}

/*
 * FOR Schleife:
 * Wird verwendet um durch Listen zu iterrieren.
 *
 * iteration (engl.) = durchlaufen
 *
    for ( Initialisierung; Bedingung; Aktion ) {
        // Code
    }
*/


// Berechne das durchschnittsalter aller personen

$gesamtAlter = 0;
$leute = count($personen);

for ($id = 0; $id < $leute; $id++) {
    $gesamtAlter = $gesamtAlter + $personen[$id][1];
    $gesamtAlter += $personen[$id][1];
    // -= /= *= +=
}

$durschschittsAlter = $gesamtAlter / $leute;
echo $duchschnittsAlter;

/**
 * Personen ID gefolgt von seinen Tieren ausgeben, wenn keine Vorhanden, dann
 * entsprechende meldung ausgeben.
 */
for ($id = 0; $id < $leute; $id++) {
    $tiere = count($personen[$id][0]);

    echo $id, ': ';

    if (0 < $tiere) {
        for ($tier = 0; $tier < $tiere; $tier++) {

            echo $personen[$id][0][$tier];

            if ($tier < $tiere - 1) {
                echo ', ';
            }

        }
    } else {
        echo 'Kein Tier';
    }
    echo "\n";
}

