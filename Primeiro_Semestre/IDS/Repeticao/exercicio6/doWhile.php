<?php

if (empty($argv[1])) {
    echo "Digite um numero!";
} else {
    $numero = $argv[1];
    $contador = 1;
    do {
        if ($contador % 2 == 0) {
            echo "$contador \n";
        }
        $contador++;
    } while ($contador <= $numero);
}
