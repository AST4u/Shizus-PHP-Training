<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tornado
 * Date: 23.01.13
 * Time: 23:41
 * To change this template use File | Settings | File Templates.
 */

//Assotiative Arrays
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

$array['dom'][3]['host'] = 'shizuku.jp';

$array = array(
    'dom' => array(
        '3' => array(
            'host' => array('shizuku.jp')
        )
    )
);