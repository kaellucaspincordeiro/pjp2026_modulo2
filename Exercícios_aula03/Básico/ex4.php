<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>

<h2>Apresentação</h2>

<form method="post">

    Nome:
    <input type="text" name="nome">

    <br><br>

    <input type="submit" value="Apresentar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];

    echo "<h4>Bem-vindo " . $nome . "!</h4>";

}

?>

</body>
</html>