<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
</head>
<body>

<h2>Verificar uma aplicação com 10% de desconto</h2>

<form method="post">

    Valor:
    <input type="number" name="valor" step="0.01">
    <br><br>

    <input type="submit" value="Verificar">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"];

    
    if($valor > 200){

        $total = $valor - ($valor * 0.10);
        echo "<h4>O valor com desconto de 10% é R$".number_format($total,2).".</h4>";
    }
    else{
        echo "<h4>O valor inserido não será aplicado desconto. Continua com R$".number_format($valor,2).".</h4>";
    }

    }

?>

</body>
</html>