<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Menu de opcoes</h1>
    <ol>
        <li>Somar dois numeros</li>
        <li>Multiplicar dois numeros</li>
        <li>Subtrair dois numeros</li>
        <li>Dividir dois numeros</li>
    </ol>

    <form action="./calculadora.php" method="get">
        <label for="first-number">Primeiro numero</label>
        <input type="number" name="first-number" id="first-number" placeholder="5">

        <label for="second-number">Segundo numero</label>
        <input type="number" name="second-number" id="second-number" placeholder="5">

        <label for="operation">Operacao</label>
        <input type="number" name="operation" id="operation" placeholder="1">

        <input type="submit" value="Enviar">
    </form>
</body>

</html>