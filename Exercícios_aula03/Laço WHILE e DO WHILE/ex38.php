<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 38</title>
</head>
<body>

<h2>Soma versão 2</h2>

<form method="post">

    Número:
    <input type="number" name="numero">
    <br><br>

    <input type="submit" value="Enviar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];
    
    $soma = 0;

    while ($numero != 0) {
        $soma += $numero;
    }

    echo "A soma é: ".$soma;

    }

?>

</body>
</html>