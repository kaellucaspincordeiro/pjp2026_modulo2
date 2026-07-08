<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
    <body>
        <?php
            $carroA = 15.000; 
            $carroB = 20.000; 
            $carroC = 25.000; 
        ?>
        <table>
            <tr>
                <th>Carro</th>
                <th>Preço</th>
            </tr>
            <tr>
                <td>Gol - 2010</td> 
                <td><?php echo 'R$'.$carroA; ?></td> 
            </tr>
            <tr>
                <td>Palio - 2013</td> 
                <td><?php echo 'R$'.$carroB; ?></td>
            </tr>
            <tr> 
                <td>Fiesta - 2014</td> 
                <td><?php echo 'R$'.$carroC; ?></td> 
            </tr>
        </table>
    </body>
</html>