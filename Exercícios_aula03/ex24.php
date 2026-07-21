<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 24</title>
</head>
<body>

<h2>Verificar Vogal</h2>

<form method="post">

    Letra:
    <input type="text" name="letra">
    <br><br>

    <input type="submit" value="Verificar a letra">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $letra = $_POST["letra"];

    switch ($letra) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo "É uma vogal.";
            break;
        default:
            echo "Não é uma vogal. A letra é uma consoante que foi digitada com uma letra: ".$letra.".";
            break;
    }

    }

?>

</body>
</html>