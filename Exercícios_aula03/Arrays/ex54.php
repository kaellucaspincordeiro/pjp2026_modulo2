<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 54 - Conversão de Moedas</title>
</head>
<body>

<?php

    $moedas = [
                'Dolár' => 0.20,
                'Euro' => 0.17,
                'Peso Argentino' => 293.54
              ];

    $dinheiro = 46.00;

    $conversao = [];

    foreach($moedas as $moeda => $taxa){
        $conversao[$moeda] = $dinheiro * $taxa;
        echo "A conversão foi para ".number_format($conversao[$moeda], 2)."<br><br>"; 
    }

?>

</body>
</html>