<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 30</title>
</head>
<body>

<h2>Tabuada</h2>

<form method="post">

    Número:
    <input type="number" name="numero">
    <br><br>

    <input type="submit" value="Realizar Tabuada">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];
    
    for ($i=0; $i <= 10 ; $i++) { 
        $multiplicacao = $numero * $i;
        echo $numero. " X " .$i. " = " .$multiplicacao."<br>";
    }
    
    }

?>

</body>
</html>