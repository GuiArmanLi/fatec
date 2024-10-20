<?php

#Entre na parta IDS/ListaExercicio/Exercicio4 e digite os numeros apos o comando php -S .\While.php 
#ExemploL: php .\While.php 1 4 8 7

$contador = 0;
while (isset($argv[$contador])) {

    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
    $contador++;
}