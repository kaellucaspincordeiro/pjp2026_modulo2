<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 57 - Carrinho de Compras</title>
</head>
<body>

<?php

    $carrinho = [
        ['Produto' => 'Banana', 'Quantidade' => 3, 'Valor' => 3.99],
        ['Produto' => 'Maçã', 'Quantidade' => 5, 'Valor' => 5.79],
        ['Produto' => 'Kiwi', 'Quantidade' => 2, 'Valor' => 0.50],
        ['Produto' => 'Abacaxi', 'Quantidade' => 8, 'Valor' => 18.40],
    ];

    $totalPagar = 0;

    foreach($carrinho as $descricao){
        $total = $descricao['Quantidade'] * $descricao['Valor'];
        $totalPagar += $total;
        echo $descricao['Produto']." tem no estoque de ".$descricao['Quantidade']." itens com o valor de R$".$descricao['Valor']."<br><br>";
    }
        echo "O valor total para pagar que você tem no seu carrinho é de R$".$totalPagar;

?>

</body>
</html>