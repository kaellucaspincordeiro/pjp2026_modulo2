<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
</head>
<body>

<h2>Verificação de Número</h2>

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

    if($numero > 0){
        echo "<h4>O número é positivo.</h4>";
    }
    else{
        echo "<h4>O número é negativo.</h4>";
    }

    }

?>

</body>
</html>