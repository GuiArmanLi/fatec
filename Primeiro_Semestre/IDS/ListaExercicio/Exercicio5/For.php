<?php

#Entre na parta IDS/ListaExercicio/Exercicio4 e digite os numeros apos o comando php -S .\For.php 
#ExemploL: php .\For.php 1 4 8 7

for ($contador = 0; isset($argv[$contador]); $contador++) {
    $number = (int) $argv[$contador];
    echo "$number ^ 2 = " . pow($number, 2) . "\n";
}
