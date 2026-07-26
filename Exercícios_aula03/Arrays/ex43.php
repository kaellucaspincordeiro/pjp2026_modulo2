<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 43 - Somatório com Array</title>
</head>
<body>

<?php

$soma = 0;

$numeros = [1,2,3,4,5,6,7,8,9,10];

    foreach($numeros as $i){

        $soma += $i;
        
    }

    echo "O total da soma ficou ".$soma;

?>

</body>
</html>