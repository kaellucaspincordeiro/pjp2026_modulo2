<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 55 - Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="post">

    Valor 1:
    <input type="number" name="valor1"><br><br>

    Valor 2:
    <input type="number" name="valor2"><br><br>
    
    <input type="submit" value="Calcular">
    <br><br>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $operacoes = [
                'Adição' => $valor1 + $valor2,
                'Subtração' => $valor1 - $valor2,
                'Multiplicação' => $valor1 * $valor2,
                'Divisão' => $valor2 == 0 ? "Não existe divisão por zero" : number_format($valor1 / $valor2, 2)
              ];

    foreach($operacoes as $matematica => $resultado){
        echo "Resultou em ".$resultado."<br><br>"; 
    }

}

?>

</body>
</html>