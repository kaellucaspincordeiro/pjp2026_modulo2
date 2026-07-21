<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>

<h2>Matemática Básica</h2>

<form method="post">

    Valor 1:
    <input type="number" name="valor1">

    <br><br>

    Valor 2:
    <input type="number" name="valor2">

    <br><br>

    <input type="submit" value="Calcular">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $soma = $valor1 + $valor2;
    $subtracao = $valor1 - $valor2;
    $multiplicacao = $valor1 * $valor2;

    if ($valor2 == 0){
        $divisao = "Não existe divisão por zero.";
    }
    else{
        $divisao = $valor1 / $valor2;
    }

    echo "<h4>
            Soma: " . $soma . "<br><br>
            Subtração: " . $subtracao . "<br><br>
            Multiplicação: " . $multiplicacao . "<br><br>
            Divisão: " . $divisao . "
          </h4>";

}

?>

</body>
</html>