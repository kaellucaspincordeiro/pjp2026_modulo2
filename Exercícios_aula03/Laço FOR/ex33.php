<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 33 - Múltiplos de 5 até 500</title>
</head>
<body>

    <?php

        for ($i=5; $i <= 500 ; $i++) { 
        
            if($i % 5 == 0){
                echo $i." ";
            }
        }

    ?>

</body>
</html>