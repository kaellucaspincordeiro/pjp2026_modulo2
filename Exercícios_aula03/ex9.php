<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>

<h2>Aumento de 15%</h2>

<form method="post">

    Salário:
    <input type="number" name="salario" step="0.01">

    <br><br>

    <input type="submit" value="Calcular Aumento">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $salario = $_POST["salario"];

    $novo_salario = $salario + ($salario * 0.15);

    echo "<h4>O novo salário de um funcionário é de R$ " . number_format($novo_salario, 2) . "</h4>";

    }

?>

</body>
</html>