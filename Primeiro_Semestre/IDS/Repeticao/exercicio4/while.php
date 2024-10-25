<?php

$contador = 0;
while (isset($argv[$contador])) {

    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
    $contador++;
}
