<?php

$notas = [$argv[1], $argv[2]];

if (empty($notas[0]) || empty($notas[1])) {
    echo "Digite 2 notas para calcular a media!";
} else {
    $media = ($notas[0] + $notas[1]) / 2;

    if ($media >= 0 && $media <= 10) {
        if ($media > 5) {
            echo "Aprovado";
        } elseif ($media < 3) {
            echo "Reprovado";
        } else {
            echo "Exame";
        }
    } else {
        echo "Media invalida";
    }
}
