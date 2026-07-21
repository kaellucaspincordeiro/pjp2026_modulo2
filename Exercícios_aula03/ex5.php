<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>

<h2>Apresentação</h2>

<form method="post">

    Nome:
    <input type="text" name="nome">

    <br><br>

    Cidade:
    <input type="text" name="cidade">

    <br><br>

    <input type="submit" value="Apresentar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];

    echo "<h4>" . $nome . " mora em " . $cidade . ".</h4>";

}

?>

</body>
</html>