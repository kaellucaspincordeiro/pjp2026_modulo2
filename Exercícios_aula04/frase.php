<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>

<h2>Frase</h2>

<?php

    function maiuscula($frase='Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços'){
        return strtoupper($frase);
    }

    function minuscula($frase='Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços'){
        return strtolower($frase);
    }

    function primeiraLetra($frase='Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços'){
        return ucfirst(strtolower($frase));
    }

    echo maiuscula();
    echo '<br><br>';
    echo minuscula();
    echo '<br><br>';
    echo primeiraLetra();

?>

</body>
</html>