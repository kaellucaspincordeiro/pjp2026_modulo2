<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 42 - Primeiro e Último Elemento</title>
</head>
<body>

<?php

$nomes = ["Pablo", "Kael", "Jucileia", "Carmen", "Haruo", "Carlos", "Thiago", "Sofia", "Edgar", "Ivan"];

    $primeiraChave = array_key_first($nomes);
    $ultimaChave = array_key_last($nomes);

    $primeiro = $nomes[$primeiraChave];
    $ultimo = $nomes[$ultimaChave];

    echo "O primeiro elemento é ".$primeiro."<br><br>";
    echo "O último elemento é ".$ultimo;

?>

</body>
</html>