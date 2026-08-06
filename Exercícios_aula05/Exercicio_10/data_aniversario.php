<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php

        echo 'Data de aniversário com barra: '.date('Y/m/d', mktime(0, 0, 0, 3, 15, 1998)).'<br>';
        echo 'Data de aniversário com ponto: '.date('y.m.d', mktime(0, 0, 0, 3, 15, 1998)).'<br>';
        echo 'Data de aniversário com traço: '.date('d-m-y', mktime(0, 0, 0, 3, 15, 1998));

    ?>
</body>
</html>