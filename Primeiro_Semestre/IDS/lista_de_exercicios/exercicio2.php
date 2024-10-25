<?php

if (!empty($argv[1])) {
    $codigo = $argv[1];

    switch ($codigo) {
        case 1:
            echo "Escritario";
            break;

        case 2:
            echo "Secretaria";
            break;
        case 3:
            echo "Caixa";
            break;
        case 4:
            echo "Gerente";
            break;
        case 5:
            echo "Diretor";
            break;

        default:
            echo "Codigo invalido";
    }
} else {
    echo "Digite um numero!";
}
