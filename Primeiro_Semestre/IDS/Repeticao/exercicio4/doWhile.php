<?php

$contador = 0;
do {
    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
    $contador++;
} while (isset($argv[$contador]));
