<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
</head>
<body>

<h2>Maior</h2>

<form method="post">

    Valor 1:
    <input type="number" name="valor1">
    <br><br>

    Valor 2:
    <input type="number" name="valor2">

    <br><br>

    <input type="submit" value="Verificar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if($valor1 > $valor2){
        echo "<h4>O maior valor é: " . $valor1 . "</h4>";
    }
    else{
        echo "<h4>O maior valor é: " . $valor2 . "</h4>";
    }

    }

?>

</body>
</html>