<?php

for ($contador = 0; isset($argv[$contador]); $contador++) {
    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
}
