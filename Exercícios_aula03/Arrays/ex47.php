<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 47</title>
</head>
<body>

<h2>Armazenar Pessoas</h2>

<form method="post">

    Nome da Primeira Pessoa:
    <input type="text" name="pessoa[]"><br>
    Nome da Segunda Pessoa:
    <input type="text" name="pessoa[]"><br>
    Nome da Terceira Pessoa:
    <input type="text" name="pessoa[]"><br>
    Nome da Quarta Pessoa:
    <input type="text" name="pessoa[]"><br>
    Nome da Quinta Pessoa:
    <input type="text" name="pessoa[]"><br>
    
    <input type="submit" value="Cadastrar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pessoa = $_POST["pessoa"];

    foreach($pessoa as $cadastro){
        echo $cadastro."<br>";
    }

    }

?>

</body>
</html>