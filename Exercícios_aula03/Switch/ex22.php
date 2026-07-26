<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 22</title>
</head>
<body>

<h2>Mês</h2>

<form method="post">

    Mês:
    <input type="number" name="mes">
    <br><br>

    <input type="submit" value="Verificar Mês">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mes = $_POST["mes"];

    switch ($mes) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "31 dias";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "30 dias";
            break;
        case 2:
            echo "28 dias";
            break;
        default:
            echo "Por favor, insira apenas um número de 1 a 12.";
            break;
    }

    }

?>

</body>
</html>