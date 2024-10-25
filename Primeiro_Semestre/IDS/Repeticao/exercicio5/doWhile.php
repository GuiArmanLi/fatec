<?php

$contador = 0;
do {
    if (empty($argv[$contador])) {
        echo "Numero no indice $contador nao indicado\n";
    } else {


        $number = (int) $argv[$contador];
        echo "$number / 2 = " . $number / 2 . "\n";
    }

    $contador++;
} while ($contador < 20);
