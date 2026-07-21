<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
</head>
<body>

<h2>Verificação de Idade</h2>

<form method="post">

    Idade:
    <input type="number" name="idade">

    <br><br>

    <input type="submit" value="Verificar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idade = $_POST["idade"];

    if($idade < 18){
        echo "<h4>Você é menor de idade.</h4>";
    }
    else{
        echo "<h4>Você é maior de idade.</h4>";
    }

    }

?>

</body>
</html>