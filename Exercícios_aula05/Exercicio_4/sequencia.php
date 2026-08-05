<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
</head>
<body>
    <?php
        function sequencia($numero){

            $resultado = '';

            for ($i=1; $i <= $numero ; $i++) { 
                $resultado .= $i;

                if($i < $numero){
                    $resultado .= '-';
                }
            }

            return $resultado;
        }
    ?>
</body>
</html>