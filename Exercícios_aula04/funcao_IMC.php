<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>

<h2>IMC:</h2>

<?php

    function calculadoraIMC($peso, $altura){
       
        $imc = $peso / ($altura * $altura);
        $totalIMC = number_format($imc,2);

        switch ($totalIMC) {
            case $totalIMC <= 20:
                $situacao = 'Abaixo do peso';
                break;
            case $totalIMC > 20 && $totalIMC <= 25:
                $situacao = 'Peso Normal';
                break;
            case $totalIMC > 25 && $totalIMC <= 30:
                $situacao = 'Sobre Peso';
                break;
            case $totalIMC > 30 && $totalIMC <= 40:
                $situacao = 'Obeso';
                break;
            default:
                $situacao = 'Obeso Mórbido';
        }

        return 'O seu IMC é '.$totalIMC.'<br>Situação: '.$situacao;
    }
    
    echo calculadoraIMC(100.7, 1.40);
   
?>

</body>
</html>