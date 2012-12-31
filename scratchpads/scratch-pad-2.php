<?php
/**
 * Manipulation (Array Listen)
 */

$liste1 = ['a', 'b'];

$liste1[1] = 'c';

$matrixNeoYeah = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17, 18]
];


// Simples Concat: "Stacking"
$newMatrix = $matrixNeoYeah[0] + $matrixNeoYeah[1] + $matrixNeoYeah[2];
// $newMatrix == [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];


/*
 * Arrays können jeden wert Speichern:
 * Zahl, Zeichenkette oder Objekt ist vollkommen egal.
 *
 * Was nicht geht ist Zirkulierende Referenzen speichern:
 *
 * $a = [&$a]; // Infinite Loop - death.
 */


// Neue leere Sammlung
$sammlung = [];

// Wir sammeln zahlen
$sammlung[] = 0;
// $sammlung = [0];
array_push($sammlung, 4, 5, 6, 7, 8, 9);


$var1 = 1;
function test ($testVar1) {
    $testVar1++;
    echo 'TestVar1 ist ', $testVar1;
}

echo $var1;     // 1
test( $var1 );  // TestVar1 ist 2
echo $var1;     // 1

$var2 = 1;
function refTest(&$testVar2) {
    $testVar2++;
    echo 'TestVar2 ist ', $testVar2;
}

echo $var2;     // 1
refTest($var2); // TestVar2 ist 2
echo $var2;     // 2


// Primitiven (Int, Long)
$parameter = $wert;
$parameter = 2;
echo $wert;



// Wir sammeln Zeichen (chars)
$sammlung[] = 'a';
$sammlung[] = chr(10); // \n
$sammlung[] = "\xFF"; // y mit doppelpunkt...



