<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>

<h2>Operação Aritmética</h2>

<form method="post">

    Número:
    <input type="number" name="numero">

    <br><br>

    <input type="submit" value="Verificar">

    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    function parOuImpar($numero){
        if($numero % 2 == 0){
            return 'Número Par';
        }
        else{
            return 'Número Ímpar';
        }
    }

    echo parOuImpar($numero);

    }

?>

</body>
</html>