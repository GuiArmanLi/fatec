<?php

#Entre na parta IDS/ListaExercicio/Exercicio4 e digite os numeros apos o comando php -S .\DoWhile.php 
#ExemploL: php .\DoWhile.php 1 4 8 7

$contador = 0;
do {
    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
    $contador++;
} while (isset($argv[$contador]));