<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
</head>
<body>

<h2>Verificar Conta</h2>

<form method="post">

    Usuário:
    <input type="text" name="usuario">
    <br><br>

    Senha:
    <input type="password" name="senha">

    <br><br>

    <input type="submit" value="Verificar Conta">

</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "admin" && $senha == "1234"){
        echo "<h4>Conta verificada com sucesso.</h4>";
    }
    else{
        echo "<h4>Usuário ou senha incorretos.</h4>";
    }

    }

?>

</body>
</html>