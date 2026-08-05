<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <?php

        $sJSON = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';

        $aLivro = json_decode($sJSON,true);
            echo 'Title: '.$aLivro["Title"].'<br><br>';
            echo 'Author: '.$aLivro["Author"].'<br><br>';
            echo 'Detail: '.$aLivro["Detail"]["Publisher"].'<br><br>';

    ?>
</body>
</html>