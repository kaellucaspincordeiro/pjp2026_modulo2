<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 58 - Agenda Telefônica</title>
</head>
<body>

<?php

    $agenda = [
        ['Nome' => 'Ivan', 'Telefone' => '(47) 3521-5660'],
        ['Nome' => 'Pablo', 'Telefone' => '(47) 3521-4588'],
        ['Nome' => 'Vinícius', 'Telefone' => '(47) 3521-0245'],
    ];

    foreach ($agenda as $pessoal) {
        echo "Nome: ".$pessoal['Nome']. " - Telefone: ".$pessoal['Telefone']."<br><br>";
    }

    

?>

</body>
</html>