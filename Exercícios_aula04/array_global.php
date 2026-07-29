<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>

<h2>Pessoas com Array Global:</h2>

<?php

    $pessoas = [];

    function cadastro($nome, $sobrenome, $idade){

        global $pessoas;

        $pessoa = [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'idade' => $idade
        ];

        $pessoas[] = $pessoa;
    }

    cadastro('Pablo', 'de Melo', 43);
    cadastro('Ivan', 'Busnardo', 50);

    echo '<pre>'.print_r($pessoas).'</pre>';
   
?>

</body>
</html>