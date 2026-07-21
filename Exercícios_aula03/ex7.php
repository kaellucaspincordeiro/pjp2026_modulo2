<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>

<h2>Matemática Especial</h2>

<form method="post">

    Valor:
    <input type="number" name="valor">

    <br><br>

    <input type="submit" value="Calcular">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"];

    $dobro = $valor * 2;
    $triplo = $valor * 3;
    $raiz = sqrt($valor);

    echo "<h4>
            Dobro: " . $dobro . "<br><br>
            Triplo: " . $triplo . "<br><br>
            Raiz Quadrada: " . $raiz . " 
          </h4>";

    }

?>

</body>
</html>