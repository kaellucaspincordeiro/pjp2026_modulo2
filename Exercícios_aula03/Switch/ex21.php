<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 21</title>
</head>
<body>

<h2>Dia da Semana</h2>

<form method="post">

    Semana:
    <input type="number" name="semana">
    <br><br>

    <input type="submit" value="Verificar Dia da Semana">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $semana = $_POST["semana"];

    switch ($semana) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Por favor, insira apenas um número de 1 a 7.";
            break;
    }

    }

?>

</body>
</html>