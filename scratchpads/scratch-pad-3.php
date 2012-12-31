<?php
/**
 * Shizu scrobbled :D
 * $var2 = 1;
   function refTest(&$testVar2) {
   $testVar2++;
   echo 'TestVar2 ist ', $testVar2;
   }
 */

$a = 100;
$b1 = 10;
$b2 = 5;
$b3 = 8;

function uploadRechner () {
    //magie :o
    // func_get_arg(index);
    // $uploadRechner[index];
    $argc = func_num_args();
    if ($argc >= 2) {
        $basisUpload = func_get_arg(0);

        $sub = 0;
        for ($arg = 1; $arg < $argc; $arg++) {
            $sub += func_get_arg($arg);
        }

        $finalUpload = $basisUpload - $sub;
        return $finalUpload;
    }

    return false;
}

$geilNeuerUpload = uploadRechner(100, 30, 40, 10, 3, 4);
