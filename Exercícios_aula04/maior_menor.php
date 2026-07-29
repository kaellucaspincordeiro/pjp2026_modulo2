<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>

<h2>Maior, Menor ou Igual:</h2>

<?php

    function verificarNumeros($valor1, $valor2){
        if($valor1 > $valor2){
            return 'O primeiro valor é maior que o segundo valor';
        }
        elseif ($valor1 < $valor2) {
            return 'O primeiro valor é menor que o segundo valor';
        }
        else{
            return 'O primeiro valor é igual ao segundo valor';        
        }
    }

    echo verificarNumeros(28, 43);
    
?>

</body>
</html>