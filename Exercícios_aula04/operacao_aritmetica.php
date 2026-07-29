<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

<h2>Operação Aritmética</h2>

<form method="post">

    Valor 1:
    <input type="number" name="valor1">

    <br><br>

    Valor 2:
    <input type="number" name="valor2">

    <br><br>

    <input type="submit" value="Calcular">

    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    function adicao($valor1, $valor2){
        return $valor1 + $valor2;
    }

    function subtracao($valor1, $valor2){
        return $valor1 - $valor2;
    }

    function multiplicacao($valor1, $valor2){
        return $valor1 * $valor2;
    }

    function divisao($valor1, $valor2){
        if($valor2 != 0){
            $divisao = $valor1 / $valor2;
            return number_format($divisao,2);
        }
        else{
            return 'Não existe divisão por Zero';
        }
    }

    echo adicao($valor1, $valor2);
    echo '<br><br>';
    echo subtracao($valor1, $valor2);
    echo '<br><br>';
    echo multiplicacao($valor1, $valor2);
    echo '<br><br>';
    echo divisao($valor1, $valor2);

    }

?>

</body>
</html>