<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>

<h2>Apresentação</h2>

<form method="post">

    Nome:
    <input type="text" name="nome">

    <br><br>

    Idade:
    <input type="number" name="idade">

    <br><br>

    <input type="submit" value="Apresentar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "<h4>Meu nome é " . $nome . " e tenho " . $idade . " anos.</h4>";

}

?>

</body>
</html>