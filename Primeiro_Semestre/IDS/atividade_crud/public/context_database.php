<?php
$connection = mysqli_connect("localhost", "root", "admin", "corrida_crud");

if ($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}

$find_atletas = mysqli_query($connection, "SELECT * FROM atletas");
