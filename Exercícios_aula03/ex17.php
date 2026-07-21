<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
</head>
<body>

<h2>Ano Bissexto</h2>

<form method="post">

    Ano:
    <input type="number" name="ano">
    <br><br>

    <input type="submit" value="Verificar Bissexto">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ano = $_POST["ano"];

    if($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)){
        echo "<h4>O ano é bissexto.</h4>";
    }
    else{
        echo "<h4>O ano não é bissexto.</h4>";
    }

    }

?>

</body>
</html>