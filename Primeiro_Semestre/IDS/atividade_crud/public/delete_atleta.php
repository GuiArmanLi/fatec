<?php

include "context_database.php";

$numero = $_GET['numero'];

$sql_delete_by_numero = "DELETE FROM atletas 
    WHERE atletas.numero = '$numero'";


if (mysqli_query($connection, $sql_delete_by_numero)) {
    header("Location: index.html ");
} else {
    echo "Erro ao excluir cadastro";
}