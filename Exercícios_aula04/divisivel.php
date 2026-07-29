<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>

<h2>Verificar Divisível por dois:</h2>

<?php

    function divisivel($valor1, $valor2 = 2){
       
        if($valor1 % $valor2 == 0){
            return 'Ele é divisível por dois';
        }
        if($valor2 == 0){
            return 'Não existe divisível por Zero';
        }
        
        return 'Ele não é divisível por dois';
         
    }
    
    echo divisivel(8,4);
    echo '<br><br>';
    echo divisivel(9,2);
    echo '<br><br>';
    echo divisivel(20);
   
?>

</body>
</html>