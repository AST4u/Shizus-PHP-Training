<?php
/**
 * Strings
 *
 * Auflösung in Zeichenketten
 */

// Auflösung
$status = "Sensei";
echo "Nana ist der " . $status . ".";   // Auflösung des Bezeichners $status und zusammenführen einer Zeichenkette.
echo "Nana ist der $status.";           // Expansion innerhalb einer Zeichenkette. @TODO:Funzt aber soll man nich xD
echo 'Nana ist der $status.';           // Bezeichner wird nich aufgelöst/expandiert da innerhalb vom Literal.
echo 'Nana ist der ' . $status . '.';   // Auflösung des Bezeichners $status und zusammenführen von Literalen und Bez.
echo "Nana ist der " . $status . '.';   // Auflösung des Bezeichners $status. Anschließend zusammenführen von Zeichen-
                                        // kette, Bezeichner und Literal.

// Expansion:
// Benennt das ausschließliche Expandieren (tauschen) von Bezeichnern zu ihren representierten Werten
$a = 1;
$b = 2;
echo "$a + $b = 3";

// Auflösung:
// Benennt das expandieren und anschließende "Auflösen" von Operatoren und Thermen.
echo $a + $b . " = $a + $b";
echo ($a + $b) . " = $a + $b";

// HTML Beispiele
//echo "<a href="http://somewhere.com">Click me!</a>";  // FALSCH weil " muss innerhalb von "" escaped werden mit \"
echo "<a href=\"http://somewhere.com\">Click me!</a>";  // RICHTIG weil " escaped sind innerhalb von ""
echo "<a href='http://somewhere.com'>Click me!</a>";    // RICHTIG
echo '<a href="http://somewhere.com">Click me!</a>';    // RICHTIG (bevorzugt)

// HTML Anwendungsbeispiele
$pageName = "Blog";
$pageLink = "blog";
$link = "http://somewhere.com";

echo "<a href='$link/$pageLink'>$pageName</a>"; // <?php echo "<a href='$link/$pageLink'>$pageName</a>" ? >
echo '<a href="$link/$pageLink">$pageName</a>';

echo "<a href='" . $link . "/" . $pageLink . "'>" . $pageName . "</a>"; // Zeichenketten, extra schritte nötig, langsam!
echo '<a href="' . $link . '/' . $pageLink . '">' . $pageName . '</a>'; // Richtig! Mit Literalen

// Perfomance "beste Wahl":
echo '<a href="', $link, '/', $pageLink, '">', $pageName, '</a>';       // Zeichenkette wird nicht im Speicher abgelegt!
// Interne auflösung:
// echo '<a href="'; echo $link; echo '/'; echo $pageLink; echo '">'; echo $pageName; echo '</a>'; //

