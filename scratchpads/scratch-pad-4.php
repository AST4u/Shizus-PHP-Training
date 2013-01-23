<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tornado
 * Date: 08.01.13
 * Time: 21:21
 * To change this template use File | Settings | File Templates.
 */

$shizu = array(
    array('WoW', 'Minecraft', 'Osu!'),
    array('MSN', 'GMX', 'Gmail'),
    array('Ellie', 'Rambo')
);

// Ausgabe der Emailprovider
$c = sizeof($shizu[1]);
for ($i = 0; $i < $c; $i++) {
        echo $shizu[1][$i];
        echo chr(10);
}