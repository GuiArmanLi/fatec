<?php

$first_number = $_GET["first-number"];
$second_number = $_GET["second-number"];

$operacao = $_GET["operation"];

$result;
switch ((int) $operacao) {
    case 1:
        $result = $first_number + $second_number;
        break;
    case 2:
        $result = $first_number * $second_number;
        break;
    case 3:
        $result = $first_number - $second_number;
        break;
    case 4:
        $result = $first_number / $second_number;
        break;
    default:
        echo "Entrada incorreta";
}

echo "Resultado: $result";