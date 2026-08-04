<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>

<h2>Superglobal e seus parâmetros:</h2>

<?php

    var_dump($_SERVER);
    echo '<br><br>';
    echo 'IP: '.$_SERVER['REMOTE_ADDR'];
    echo '<br><br>';
    echo 'Nome do Arquivo Atual: '.basename($_SERVER['SCRIPT_NAME']);
    echo '<br><br>';
    echo 'URL: '.$_SERVER['REMOTE_ADDR'].''.$_SERVER['SCRIPT_NAME'];
    

?>

</body>
</html>
