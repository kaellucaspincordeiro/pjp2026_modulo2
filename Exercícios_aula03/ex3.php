<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

<h2>Calcular Total</h2>

<form method="post">

    Produto:
    <input type="text" name="produto">

    <br><br>

    Quantidade:
    <input type="number" name="quantidade">

    <br><br>

    Valor:
    <input type="number" name="valor">

    <br><br>

    <input type="submit" value="Enviar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];

    $total = $quantidade * $valor;
    
    echo "<h4>
            Produto: " . $produto . "<br><br>
            Quantidade: " . $quantidade . "<br><br>
            Valor Unitário: R$" . $valor . "<br><br>
            Total: R$" . $total . "
          </h4>";

}

?>

</body>
</html>