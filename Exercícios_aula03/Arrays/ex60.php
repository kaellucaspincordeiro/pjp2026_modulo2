<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 60 - Sistema de Votação</title>
</head>
<body>
    <?php

        $urna = [
            'PHP' => 3,
            'Java' => 2,
            'Python' => 13,
            'JavaScript' => 10
        ];

        foreach ($urna as $resultado => $votos) {

            echo $resultado." com ".$votos." votos<br>";
        }
        echo "<br>";

        $quantidade = max($urna);
        $vencedor = array_search($quantidade, $urna);
        
        echo "O vencedor foi a linguagem ".$vencedor;

    ?>
</body>
</html>