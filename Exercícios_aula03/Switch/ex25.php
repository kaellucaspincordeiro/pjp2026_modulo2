<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25</title>
</head>
<body>

<h2>Calculadora IMC</h2>

<form method="post">

    Peso (kg):
    <input type="number" name="peso" step="0.01">
    <br><br>

    Altura (m):
    <input type="number" name="altura" step="0.01">
    <br><br>

    <input type="submit" value="Calcular IMC">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * 2);
    

    switch ($imc) {
        case $imc <= 18.5:
            echo "O seu IMC é ".number_format($imc,2).", você está com Baixo Peso.";
            break;
        case $imc > 18.5 && $imc <= 25:
            echo "O seu IMC é ".number_format($imc,2).", você está com Peso Normal.";
            break;
        case $imc > 25 && $imc <= 30:
            echo "O seu IMC é ".number_format($imc,2).", você está com Peso de Pré-Obeso.";
            break;
        case $imc > 30 && $imc <= 35:
            echo "O seu IMC é ".number_format($imc,2).", você está com Peso da Obesidade Grau I.";
            break;
        case $imc > 35 && $imc <= 40:
            echo "O seu IMC é ".number_format($imc,2).", você está com Peso da Obesidade Grau II.";
            break;
        default:
            echo "O seu IMC é ".number_format($imc,2).", você está com Peso da Obesidade Grau III.";
            break;
    }

    }

?>

</body>
</html>