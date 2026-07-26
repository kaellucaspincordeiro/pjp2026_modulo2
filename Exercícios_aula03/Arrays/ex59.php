<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 59 - Boletim Escolar</title>
    <style>
        table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php

    $boletim = [
        ['nome' => 'eduardo', 'media' => 6.5],
        ['nome' => 'haruo', 'media' => 4.5],
        ['nome' => 'kael', 'media' => 8.5],
    ];

    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Média</th>
            <th>Situação</th>
        </tr>
        <?php

            foreach($boletim as $desempenho){

                $situacao = $desempenho['media'] >= 6.0 ? 'Aprovado' : 'Reprovado';

                echo "<tr>
                        <td>".$desempenho['nome']."</td>
                        <td>".$desempenho['media']."</td>
                        <td>".$situacao."</td>
                    </tr>";
            }

        ?>
    </table>
</body>
</html>