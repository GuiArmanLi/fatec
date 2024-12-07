<?php

include "context_database.php";

$numero = $_POST['numero'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$categoria = $_POST['categoria'];
$equipe = $_POST['equipe'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$foto = $_POST['foto'];

$sql = "INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, foto)
        VALUES ( '$numero', '$nome', '$idade', '$categoria', '$equipe', '$telefone', '$email', '$foto')";

if (mysqli_query($connection, $sql)) {
    header("Location: find_atletas.php ");
} else {
    echo "Erro ao cadastrar";
}