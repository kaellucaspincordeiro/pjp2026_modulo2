<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 48</title>
</head>
<body>

<h2>Ordenar Pessoas</h2>

<form method="post">

    Nome da Primeira Pessoa:
    <input type="text" name="pessoa[]"><br><br>
    Nome da Segunda Pessoa:
    <input type="text" name="pessoa[]"><br><br>
    Nome da Terceira Pessoa:
    <input type="text" name="pessoa[]"><br><br>
    Nome da Quarta Pessoa:
    <input type="text" name="pessoa[]"><br><br>
    Nome da Quinta Pessoa:
    <input type="text" name="pessoa[]"><br><br>
    
    <input type="submit" value="Cadastrar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pessoa = $_POST["pessoa"];

    sort($pessoa, SORT_NATURAL);

    foreach($pessoa as $cadastro){
        echo $cadastro."<br>";
    }
    
    }

?>

</body>
</html>