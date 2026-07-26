<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 46 - Números Pares do Array</title>
</head>
<body>

<?php

$numeros = [1,2,3,4,5,6,7,8,9,10];

    foreach($numeros as $par){
        if($par % 2 == 0){
            echo $par." ";
        }
    }

?>

</body>
</html>