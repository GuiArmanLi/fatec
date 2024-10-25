<?php

if (!empty($argv[1])) {
    $idade = $argv[1];

    if ($idade < 16) {
        echo "Nao eleitor";
    } elseif ($idade >= 18 && $idade <= 65) {
        echo "Eleitor Obrigatorio";
    } else {
        echo "Eleitor facultativo";
    }
} else {
    echo "Digite uma idade!";
}
