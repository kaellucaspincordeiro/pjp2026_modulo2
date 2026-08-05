<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <?php

        $aTemperaturas = Array(38, 20, 22, 28, 31, 28, 33, 35, 26, 24, 36, 23, 35, 36, 
                               33, 28, 22, 33, 32, 25, 34, 22, 22, 25, 24, 28, 33, 35, 39, 33);  
         
                               
        $somaTemperatura = 0;

        foreach ($aTemperaturas as $registros) {
            $somaTemperatura += $registros; 
        }
        $quantidadeTemperatura = count($aTemperaturas);
        $media = $somaTemperatura / $quantidadeTemperatura;
        echo 'A média da temperatura de um mês com laço foreach é de '.number_format($media,1).'°C.';
        echo '<br><br>';

        $somaTemperatura = 0;
        
        for ($i=0; $i < $quantidadeTemperatura ; $i++) { 
            $somaTemperatura += $aTemperaturas[$i];
        }
        $media = $somaTemperatura / $quantidadeTemperatura;
        echo 'A média da temperatura de um mês com laço for é de '.number_format($media,1).'°C.';

    ?>
</body>
</html>