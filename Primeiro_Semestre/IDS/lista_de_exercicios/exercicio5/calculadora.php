<?php

$name = $_GET["name"];
$apartment = $_GET["apartment"];
$daily = $_GET["daily"];
$consumption = $_GET["consumption"];

$daily_value;

switch ($apartment) {
    case "A":
        $daily_value = $daily * 150;
        break;
    case "B":
        $daily_value = $daily * 100;
        break;
    case "C":
        $daily_value = $daily * 75;
        break;
    case "D":
        $daily_value = $daily * 50;
        break;
    default:
        echo "Apartamento incorreto";
}

$total = $daily_value + $consumption;
$total = $total * 1.10;

echo "<ol>";
echo "<li> Nome: $name";
echo "<li> Tipo do apartamento: $apartment";
echo "<li> Quantidade de diarias: $daily";
echo "<li> Consumo interno total: $consumption";
echo "<li> Total a pagar: $total";
echo "</ol>";