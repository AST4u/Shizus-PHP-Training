<?php
/**
 * For
 * Sandkasten
 */

// Scratch Pad: Zählen mit For-Schleifen


$malenMitZahlen = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$mMZ = count($malenMitZahlen);

for ($i = 0; $i < $mMZ; $i++) {
    echo $i;
}

for ($zahl = 1; $zahl <= 10; $zahl++) {
    echo $zahl, chr(10);
}

$what = 0.1;
for (; $what < 100;) {
    $what *= 1.2;
    echo $what, "?!\n";
}


$dasIst = 100;
$ichWill = -20;
$inSchritten = 0.2;
$binIchFertig = false;

// Wir haben: 100 (dasIst), -20 (ichWill), 0.2 (inSchritten), false (binIchFertig)
$runs = 1;
//     100       -20
for (/* $mach = $dasIst*/; $dasIst > $ichWill;) {
    echo '#', $runs++, ' ';
//  100      - 0.2
    $dasIst -= $inSchritten;
//       99.8      !!!\n
    echo $dasIst, "!!!\n";
//      -20        -20
    if ($dasIst == $ichWill); {
        // Idiot?
        $binIchFertig = true;

    }
}

for ($wert = $dasIst; $wert >= $ichWill; $wert -= 0.2) {
    echo $wert, "\n";
    if ($wert == $ichWill) {
        $binIchFertig = true;
    }
}

var_dump($binIchFertig);
