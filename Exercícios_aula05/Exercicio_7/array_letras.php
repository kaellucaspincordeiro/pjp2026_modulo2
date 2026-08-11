<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <?php

        define('MAIUSCULAS', 1);
        define('MINUSCULAS', 2);

        function caixasArray(array $caixa, int $opcao)
        {
            $resultadoArray = [];

            foreach ($caixa as $item) {
                if ($opcao === MAIUSCULAS) {
                    $resultadoArray[] = mb_strtoupper($item, 'UTF-8');
                } elseif ($opcao === MINUSCULAS) {
                    $resultadoArray[] = mb_strtolower($item, 'UTF-8');
                } else {
                    $resultadoArray[] = $item;
                }
            }

            return $resultadoArray;
        }

        $itens = [
            'microondas',
            'televisão',
            'PANELA',
            'ESPÁTULA',
            'MeSa'
        ];

        $itensMaiusculos = caixasArray($itens, MAIUSCULAS);
        $itensMinusculos = caixasArray($itens, MINUSCULAS);

        echo 'Seus itens: ' . implode(', ', $itens) . '<br><br>';

        echo 'Valores com letras maiúsculas: '
            . implode(', ', $itensMaiusculos)
            . '<br><br>';

        echo 'Valores com letras minúsculas: '
            . implode(', ', $itensMinusculos);
    ?>
</body>
</html>
