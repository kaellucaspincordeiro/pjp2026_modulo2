<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 40</title>
</head>
<body>

<h2>Caixa Eletrônico</h2>

<form method="post">

    Operação:
    <input type="text" name="operacao">
    <br><br>

    Valor:
    <input type="number" name="valor" step="0.01">
    <br><br>

    <input type="submit" value="Enviar">
    <br><br>

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $operacao = $_POST["operacao"];
    $valor = $_POST["valor"];
    
        $saldo = 0;

        while (true){
            switch ($operacao) {
                case "depositar":
                    if($valor > 0){
                        $saldo += $valor;
                        echo "O seu valor depositado foi de R$".$valor.". Você tem o saldo de R$".$saldo;
                    }
                    break;

                case "sacar":
                    if($valor > $saldo){
                        echo "Valor insuficiente para realizar o seu saque";
                        }
                        else{
                            $saldo -= $valor;
                            echo "O seu valor sacado foi de R$".$valor.". Você tem o saldo de R$".$saldo;
                        }
                        break;
                
                case "sair":
                    break;
            }
            break;
        }
    }
?>

</body>
</html>