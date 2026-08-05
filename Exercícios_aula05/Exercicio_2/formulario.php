<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>

<h2>GET e POST</h2>

<form method="get">

    Nome:
    <input type="text" name="nome">

    <br><br>

    <input type="submit" value="Enviar GET">

</form>

    <br><br>

<form method="post">

    Nome:
    <input type="text" name="nome">

    <br><br>

    <input type="submit" value="Enviar POST">

    <br><br>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $nome = $_GET["nome"];

    }
    
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];

    echo "Boa noite, ".$nome;

    }

?>

</body>
</html>