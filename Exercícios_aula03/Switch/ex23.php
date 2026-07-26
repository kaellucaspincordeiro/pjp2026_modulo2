<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 23</title>
</head>
<body>

<h2>Matemática Básica versão 2</h2>

<form method="post">

    Valor 1:
    <input type="number" name="valor1">
    
    <br><br>
    
    Valor 2:
    <input type="number" name="valor2">
    
    <br><br>

    operacao:
    <input type="text" name="operacao">
    <br><br>

    <input type="submit" value="Calcular">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case "+":
            $soma = $valor1 + $valor2;
            echo "A soma é: ". $soma;
            break;
        case "-":
            $subtracao = $valor1 - $valor2;
            echo "A subtração é: ". $subtracao;
            break;
        case "*":
            $multiplicacao = $valor1 * $valor2;
            echo "A multiplicação é: ". $multiplicacao;
            break;
        case "/":
            if ($valor2 == 0){
                echo "Não existe divisão por zero.";
            }
            else{
                $divisao = $valor1 / $valor2;
                echo "A divisão é: ".$divisao;
            }
            break;
        default:
            echo "Operação inválida.";
            break;
    }
}

?>

</body>
</html>