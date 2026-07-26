<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 16</title>
</head>
<body>

<h2>Par ou Ímpar</h2>

<form method="post">

    Número:
    <input type="number" name="numero">
    <br><br>

    <input type="submit" value="Verificar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if($numero % 2 ==0){
        echo "<h4>O número é par.</h4>";
    }
    else{
        echo "<h4>O número é ímpar.</h4>";
    }

    }

?>

</body>
</html>