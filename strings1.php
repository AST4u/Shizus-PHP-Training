<?php

/**
 * Strings 1: Einfaches verketten von Strings
 */

$a = "Hello ";
$b = "World";

echo "$a $b";

// "." verbindet Zeichenketten

echo $a . $b;

// { } können verwendet werden um innerhalb von
// DOUBLE quotes auf die erste Ebene von array zu zugreifen

echo "{$user['name']} is heute mal wieder nicht artig gewesen. {$user['name']}"; // Richtig

echo "{$array[0][1]}"; // Falsch

// Merke: { } funktionieren nur in double-quoted strings! Nicht außerhalb
// oder in single-quotes.

echo $user["name"] . " is heute mal wieder nicht artig gewesen. " . $user["name"]; // PHP 5.2+ Syntax!


$name = "Shizuku";
$job = "Zoohälter";
$einkommen = 7.50;
$waehrung = "&euro;";

// Shizu #1

echo $name . " verdient in seinem Beruf als " . $job . " pro Stunde " . (string) $einkommen . $waehrung . "."; // Richtig
echo "$name verdient in seinem Beruf als $job pro Stunde $einkommen $waehrung."; // Functioniert, ist aber nicht "strict"


// In php kann man Zeichenketten über mehrere Zeilen ausdehnen.

$text = "Hallo,

ich wollte ihnen mitteilen......


bla!";


var_dump("\n" == chr(10)); // Gibt: "true" aus.

var_dump(strlen("\n\n\n\n") == strlen("1234")); // Gibt: "true" aus.

// Shizu #2  Text mit mehreren Zeilenumbrüchen via "\n" (Escapesequence) erstellt.

$text = "Hallo, \n\nich wollte ihnen mitteilen......\n\n\nbla!";