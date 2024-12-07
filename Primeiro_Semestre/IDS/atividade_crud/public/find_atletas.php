<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <title>Lista de Atletas</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-link" href="post_atleta.html">Registrar</a>
            </div>
        </div>
    </nav>

    <h1 class="text-center">Lista de Clientes</h1>

    <div id="carouselExample" class="w-50 m-auto carousel slide">
        <div class="carousel-inner">

            <?php
            include('context_database.php');

            function isValidImage($obj, $field = 'foto')
            {
                if (!isset($obj->$field) || empty($obj->$field)) {
                    return false;
                }
                
                $foto = $obj[$field];
                
                if (filter_var($foto, FILTER_VALIDATE_URL)) {
                    $headers = @get_headers($foto, 1);
                    if (!$headers || strpos($headers[0], '200') === false) {
                        return false;
                    }
                    $imageSize = @getimagesize($foto);
                    return $imageSize !== false;
                }
                
                if (file_exists($foto) && @getimagesize($foto)) {
                    return true;
                }
                
                return false;
            }
            
            if (mysqli_num_rows($find_atletas) > 0) {
                $first = true;
                while ($atleta = mysqli_fetch_assoc($find_atletas)) {
                    $foto = "";
                    
                    
                    if (isValidImage($atleta)) { //Nao sei o porquê nao ta indo
                        $foto = $atleta['foto'];
                    } else {
                        $foto = "https://royalarcadenorwich.co.uk/wp-content/uploads/2017/07/150x150.png";
                    }


                    $numero = $atleta['numero'];
                    $nome = $atleta['nome'];
                    $idade = $atleta['idade'];
                    $categoria = $atleta['categoria'];
                    $equipe = $atleta['equipe'];
                    $email = $atleta['email'];
                    $telefone = $atleta['telefone'];
                    $kit_retirado = $atleta['kit_retirado'];

                    $activeClass = $first ? 'active' : '';

                    echo "<div class='carousel-item $activeClass'>";
                    echo "<div class='w-25 m-auto card' style='width: 18rem;'>";
                    echo "<img src='$foto' class='card-img-top' alt='Foto do atleta'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Número: $numero - $nome</h5>";
                    echo "</div>";
                    echo "<ul class='list-group list-group-flush'>";
                    echo "<li class='list-group-item'>Idade: $idade</li>";
                    echo "<li class='list-group-item'>Categoria: $categoria</li>";
                    echo "<li class='list-group-item'>Equipe: $equipe</li>";
                    echo "<li class='list-group-item'>Email: $email</li>";
                    echo "<li class='list-group-item'>Telefone: $telefone</li>";

                    if ($kit_retirado == 0) {
                        echo "<li class='list-group-item'>";
                        echo "<div class='alert alert-success' role='alert'>Kit retirado!</div>";
                        echo "</li>";
                    } else {
                        echo "<li class='list-group-item'>";
                        echo "<div class='alert alert-danger' role='alert'>Kit não retirado!</div>";
                        echo "</li>";
                    }
                    echo "</ul>";

                    echo "<div class='card-body'>";
                    echo "<a href='form_put_atleta.php?numero=$numero' type='button' class='btn btn-warning'>Atualizar</a>";
                    echo "<a href='delete_atleta.php?numero=$numero' type='button' class='btn btn-danger'>Deletar</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                    $first = false;
                }
            } else {
                echo "<p>Nenhum atleta encontrado</p>";
            }
            ?>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

</body>

</html>