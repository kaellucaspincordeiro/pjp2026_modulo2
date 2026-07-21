<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
</head>
<body>

<h2>Média da nota</h2>

<form method="post">

    Primeira Nota:
    <input type="number" name="nota1" step="0.01">

    <br><br>

    Segunda Nota:
    <input type="number" name="nota2" step="0.01">

    <br><br>

    Terceira Nota:
    <input type="number" name="nota3" step="0.01">

    <br><br>

    <input type="submit" value="Calcular Média">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3)/3;

    if($media > 6){
        echo "<h4>A sua média é ".number_format($media,2)." você foi aprovado</h4>";
    }
    else{
        echo "<h4>A sua média é ".number_format($media,2)." você foi reprovado</h4>";
    }

    }

?>

</body>
</html>