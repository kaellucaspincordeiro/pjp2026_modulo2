<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>

<h2>Retângulo</h2>

<form method="post">

    Largura:
    <input type="number" name="largura" step="0.01">

    <br><br>

    Altura:
    <input type="number" name="altura" step="0.01">

    <br><br>

    <input type="submit" value="Calcular Área">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    $area = $largura * $altura;

    echo "<h4>Área do retângulo é de ".$area." m².</h4>";

    }

?>

</body>
</html>