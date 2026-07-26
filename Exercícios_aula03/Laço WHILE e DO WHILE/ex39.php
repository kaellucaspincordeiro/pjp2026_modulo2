<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 39</title>
</head>
<body>

<h2>Descobrir Senha</h2>

<form method="post">

    Senha:
    <input type="password" name="senha">
    <br><br>

    <input type="submit" value="Adivinhar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $senha = $_POST["senha"];
    
    $oculto = "programmer";
    $tentativa = 0;

    do {

        if($senha != $oculto){
            $tentativa += 1;
            echo "Você errou na hora de adivinhar a senha!";
        }

    } while ($senha == $oculto);
    
    echo "Você acertou a senha com pelo menos ".$tentativa.".tentativa(s).";

    }
?>

</body>
</html>