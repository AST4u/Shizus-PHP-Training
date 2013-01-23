<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tornado
 * Date: 08.01.13
 * Time: 21:21
 * To change this template use File | Settings | File Templates.
 */

$shizu = array(
    'Spiele' => array('WoW', 'Minecraft', 'Osu!'),
    'Provider' => array('MSN', 'GMX', 'Gmail'),
    'Katzen' => array('Ellie', 'Rambo')
);

// Ausgabe der Emailprovider
$c = sizeof($shizu['Provider']);
for ($i = 0; $i < $c; $i++) {
        echo $shizu['Provider'][$i];
        echo chr(10);
}