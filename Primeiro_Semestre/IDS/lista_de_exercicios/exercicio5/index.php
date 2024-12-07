<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hotel Velha Turbo</h1>

    <form action="./calculadora.php" method="get">
        <label for="name">Nome do hospede</label>
        <input type="text" name="name">

        <label for="apartment">Tipo do apartamento</label>
        <select name="apartment">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <!-- <input type="text" name="apartment"> -->

        <label for="daily">Quantidade de diarias</label>
        <input type="number" name="daily">

        <label for="consumption">Valor consumido</label>
        <input type="number" name="consumption">

        <input type="submit" value="Enviar">
    </form>

</body>

</html>