<?php
/**
 * Strings
 *
 * Single und Doublequotes
 */

// Single-Quotes = literale die ausgeben was zwischen ihnen steht (ohne manu)
// Double-Quetes = sind Zeichenketten die noch expandiert werden.

// Beispiele für Literale (singlequotes)

$literal1 = 'In php fängt eine Variable mit dem $ Zeichen an.';
$expansion = "In php fängt eine Variable mit dem \$ Zeichen an."; // Expansion muss escaped werden!

/**
 * Aufgabe:
 * Weise einer beliebigen Variable einen Wert zu und gebe diesen aus.
 * Stelle der Ausgabe den bezeichner vorran.
 */

$text = 'Hallo Welt';

// Double-Quote Variante als Demo für escapte Expansion.
echo "\$text = " . $text;

// Single-Quote Variante als Demo für Literale mit Expansion.
echo '$text = ' . $text;



/**
 * Beispiel Aufgaben
 * 1) Ausgabe bestimmen
 * 2) Beschreibe warum die Ausgaben entstehen
 */

$username = "Andarion";

// Literal $username wird nicht expandiert
echo 'Hallo, $username, wie geht es dir?';
// Ausgabe: Hallo, $username, wie geht es dir?


$username = "Ezoda";

// Bezeichner $username wird aufgelöst in der Verkettung zweier Literale.
echo 'Hallo, ' . $username . ', wie geht es dir?';
// Ausgabe: Hallo, Ezoda, wie geht es dir?
// Antwort: Keine weil Tod


$username = '$username';

// Trojanisches Pferd :p Bezeichner wird aufgelöst in einer Verkettung zweier Zeichenketten,
// weil der Bezeichner sich selbst in einem Literal bezeichnet.
echo "Hallo, " . $username . ", wie geht es dir?";
// Ausgabe: Hallo, $username, wie geht es dir?


$ich = "Shizuku";
$gewichtung = "guten";
$betriebsSystem = "Windows 8";

// Auflösung des Bezeichners $ich
// Ausgabe des Textes und Expansion des Bezeichners $gewichtung innerhalb einer Zeichenkette (String).
// Auflösung des Bezeichners $betriebsSystem.
// Verkettung Literal
echo $ich . ", hat noch keinen $gewichtung Grund, um auf " . $betriebsSystem . ' umzusteigen.';
// Ausgabe: Shizuku, hat noch keinen guten Grund, um auf Windows 8 umzusteigen.



// Verhalten von Umschließungen

// Bei selbst Umschließung muss beachtet werden,
// dass die Quotes der Umschließung escaped werden müssen.
// "\"" und '\''

echo "This isn't good!"; // single quote kann in Zeichenkette (double quoted) verwendet werden ohne escaping
echo 'This isn\'t good!'; // single in single muss escaped werden
echo "Die Ausgabe war \"Wert\""; // double in double muss escaped werden
echo "Die Ausgabe war 'Wert'"; // Richtig, kein escaping


/**
 * Info Tabelle
 *
 * Wörter:
 * Literal:             single-quotes
 * Zeichenkette:        double-quotes, typ String
 * Bezeichner:          Variable, Konstante, Zuweisungen
 * Auflösung:           Manipulation, Parsing
 * Verkettung:          concatenation, zusammenführen, verbinden
 * Expandierung:        expansion, translation
 * Escape-Sequenz:      escaping
 *
 * Literale selbst Bezeichnung:
 * Wenn man einem Bezeichner den Wert seines Names zuweist
 * @example $var = '$var';
 *
 */