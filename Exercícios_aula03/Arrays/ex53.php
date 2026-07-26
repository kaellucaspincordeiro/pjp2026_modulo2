<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 53 - Gerador de senha aleatória</title>
</head>
<body>

<?php

    $caracteresSenha = array_merge(
        range('a','z'), 
        range('A','Z'), 
        range(0,9), 
        ['!', '@', '#', '$', '&', '|', '*', '/', '-', '+', '.', '_', '='] 
    );

    shuffle($caracteresSenha);

    $tamanho = 9;

    $geradorSenha = array_slice($caracteresSenha, 0, $tamanho);

    $senhaOriginal = implode('', $geradorSenha);

    echo "A senha gerada é ".$senhaOriginal;

?>

</body>
</html>