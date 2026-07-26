<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 32</title>
</head>
<body>

<h2>Fatorial</h2>

<form method="post">

    Número:
    <input type="number" name="numero">
    <br><br>

    <input type="submit" value="Realizar Fatorial">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];
    
    $fatorial = 1;

    for ($i=1; $i <= $numero ; $i++) { 
        $fatorial = $fatorial * $i;
    }
    
    echo "O fatorial de " .$numero. "! é de " .$fatorial;
    
    }

?>

</body>
</html>