<?php
include "context_database.php";

$numero = $_GET['numero'];

$sql_find_by_numero = "SELECT * FROM atletas 
    WHERE atletas.numero = '$numero'";

$response_find_by_numero = mysqli_query($connection, $sql_find_by_numero);

$atleta_by_numero = mysqli_fetch_assoc($response_find_by_numero);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro de alunos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h3>Formulário para atualizar atletas</h3>

    <form class="d-flex flex-column justify-content-center align-items-stretch w-25 p-4" action="put_atleta.php"
        method="post">
        <div>
            <label class="w-25" for="foto">Foto</label>
            <input class="w-50" type="text" name="foto" id="foto"
                placeholder="https://www.jorginho.com/images/devphp.png" value=<?php echo $atleta_by_numero["foto"]; ?>>
        </div>

        <input type="hidden" name="numero" id="numero" placeholder="1" max="10000">

        <div>
            <label class="w-25" for="nome">Nome</label>
            <input class="w-50" type="text" name="nome" id="nome" placeholder="João Vitor" max="50" value=<?php echo $atleta_by_numero["nome"]; ?>>
        </div>

        <div>
            <label class="w-25" for="idade">Idade</label>
            <input class="w-50" type="number" name="idade" id="idade" placeholder="63" max="120" value=<?php echo $atleta_by_numero["idade"]; ?>>
        </div>

        <div>
            <label class="w-25" for="categoria">Categoria</label>
            <input class="w-50" type="text" name="categoria" id="categoria" placeholder="PCD" max="50" value=<?php echo $atleta_by_numero["categoria"]; ?>>
        </div>

        <div>
            <label class="w-25" for="equipe">Equipe</label>
            <input class="w-50" type="text" name="equipe" id="equipe" placeholder="Rapadura" max="75" value=<?php echo $atleta_by_numero["equipe"]; ?>>
        </div>

        <div>
            <label class="w-25" for="email">E-mail</label>
            <input class="w-50" type="text" name="email" id="email" placeholder="rapajoao@gmail.com" max="100"
                value=<?php echo $atleta_by_numero["email"]; ?>>
        </div>

        <div>
            <label class="w-25" for="telefone">Telefone</label>
            <input class="w-50" type="text" name="telefone" id="telefone" placeholder="4002-8922" max="15" value=<?php echo $atleta_by_numero["telefone"]; ?>>
        </div>

        <?php
        if ($atleta_by_numero["kit_retirado"] == 1) {
            echo "<div class='form-check'>";
            echo "<label class='form-check-label' for='flexCheckDefault'>Kit retirado?</label>";
            echo "<input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>";
            echo "</div>";
        }
        ?>

        <input type="submit" class="btn btn-success" value="Enviar">
    </form>
</body>

</html>