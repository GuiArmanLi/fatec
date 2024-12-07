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


$sql_update = "UPDATE atletas
SET nome = '$nome',
idade = '$idade',
categoria = '$categoria',
equipe = '$equipe',
telefone = '$telefone',
email = '$email',
foto = '$foto'
WHERE atletas.numero = '$numero'";

mysqli_autocommit($connection, false);
if (mysqli_query($connection, $sql_update)) {
    header("Location: find_atletas.php ");
} else {
    echo "Erro ao atualizar";
}
