<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Tabuada de 1 a 10</th>
        </tr>
        <?php
          for ($i=1; $i <= 10 ; $i++) { 
            for ($mult=1; $mult <= 10 ; $mult++) { 
                $resultadoTabuada = $i * $mult;
                echo '<tr>';
                echo '<td>'.$i.' X '.$mult.' = '.$resultadoTabuada.'</td>';
                echo '</tr>';  
            }
          }
        ?>
    </table>
</body>
</html>