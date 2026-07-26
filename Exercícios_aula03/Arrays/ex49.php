<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 49</title>
</head>
<body>

<h2>Verificar a pessoa existente</h2>

<form method="post">

    Nome:
    <input type="text" name="pessoa"><br><br>
    
    <input type="submit" value="Verificar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pessoa = $_POST["pessoa"];

    $nomes = ["Pablo", "Kael", "Haruo", "Thiago", "Ivan"];

    if(in_array($pessoa, $nomes)){
        echo "Esse nome existe no Array";
    }
    else{
        echo "Esse nome não existe no Array";
    }
    
    }

?>

</body>
</html>