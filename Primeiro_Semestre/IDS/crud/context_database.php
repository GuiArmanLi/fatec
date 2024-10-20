<?php 

if (mysqli_connect("localhost", "root", "admin","crud")){
    echo "Conexão realizada!";
} else {
    echo "Conexâo falhou!"   
}