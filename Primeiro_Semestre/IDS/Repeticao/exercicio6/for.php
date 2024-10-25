<?php

if (empty($argv[1])) {
    echo "Digite um numero!";
} else {
    $numero = $argv[1];
    for ($contador = 1; $contador <= $numero; $contador++) {

        if ($contador % 2 == 0) {
            echo "$contador \n";
        }
    }
}
