# Strings

Strings, zu deutsch Zeichenketten, sind eine Aneinanderreihung von `bytes` die eine vom Menschen
lesbare Zeichenfolge darstellen. Simpler ausgedrückt, sie speichern Klartext.

In PHP gibt es zwei Arten von `strings`:

- Strings *(oder Zeichenketten)*
- Literale

```php
$string = "Zeichenkette";
$string = 'Literal';
echo 'Basis Wissen zu Zeichenketten und Literalen';
```

- Strings
    1. Einfaches verketten von Strings - **done**
    2. Single- und Doublequotes - **done**
    3. Auflösung in Strings

# Array's

```php
// bis php 5.3:
$list = array(1,2,3,4,5,6);
$assoc = array("a" => 1, "b" => 2, "c" => 3);

// ab php 5.4:
$list = [1,2,3,4,5,6];
$assoc = ["a" => 1, "b" => 2, "c" => 3];
```

- Arrays/Listen
    1. Einleitung - **done**
    2. Dimensionen - **done**
        1. Einfache Dimensionen - **done**
        2. Mehrfache Dimensionen - **done**
    3. Manipulation
    4. Interation (loop) - **done**
    5. Spezielle Arrays/Listen
- Assoziative Arrays (objekte)
    1. Einleitung
    2. Zugriff
        1. Lesen von Werten
        2. Schreiben von Werten
        3. Sicheres überprüfen
    4. Interation
    5. `$_GET`, `$_POST`, `$_SERVER`, `$_REQUEST` und `$argv`

# Funktionen

