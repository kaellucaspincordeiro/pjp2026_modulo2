<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
</head>
<body>

<h2>Situação da nota</h2>

<form method="post">

    Nota:
    <input type="number" name="nota" step="0.01">

    <br><br>

    <input type="submit" value="Verificar Nota">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nota = $_POST["nota"];

    if($nota > 6){
        echo "<h4>Aprovado.</h4>";
    }
    else{
        echo "<h4>Reprovado.</h4>";
    }

    }

?>

</body>
</html>