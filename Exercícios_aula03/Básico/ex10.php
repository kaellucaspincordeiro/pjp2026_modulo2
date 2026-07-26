<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
</head>
<body>

<h2>Conversão de Temperatura</h2>

<form method="post">

    Celsius:
    <input type="number" name="celsius" step="0.01">

    <br><br>

    <input type="submit" value="Converter">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celsius = $_POST["celsius"];

    $fah = ($celsius * 1.8) + 32;

    echo "<h4>Conversão de " . $celsius . "°C para " . $fah . "°F</h4>";

    }

?>

</body>
</html>