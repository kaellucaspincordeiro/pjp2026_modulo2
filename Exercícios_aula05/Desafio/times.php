<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP: Times</title>
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
    <?php
        //Letra A
        $aTimes = Array(
		            Array('time'=>'Corinthians','posicao'=> 1,'pontos'=> 81,'retrospecto'=>Array('E','D','V')),
		            Array('time'=>'Sport','posicao'=> 2,'pontos'=> 69,'retrospecto'=>Array('V','V','E')),
		            Array('time'=>'Santos','posicao'=> 3,'pontos'=> 58,'retrospecto'=>Array('D','D','E')),
		            Array('time'=>'Cruzeiro','posicao'=> 4,'pontos'=> 52,'retrospecto'=>Array('E','V','E')),
		            Array('time'=>'Internacional','posicao'=> 5,'pontos'=> 50,'retrospecto'=>Array('D','V','E'))
		);

        //Letra B
        foreach($aTimes as $time){
            $sJSON = JSON_ENCODE($time);

            echo $sJSON.'<br>'; 
        }
        //Letra C
        $sConteudo = '';

        foreach($aTimes as $time){
            $sConteudo .= JSON_ENCODE($time);
        }

        FILE_PUT_CONTENTS('times.txt', $sConteudo);

        //Letra D
        $sConteudo = trim(FILE_GET_CONTENTS('times.txt'));
    ?>
    <br><br>
    <table>
        <tr>
            <th>Time</th>
            <th>Posição</th>
            <th>Pontos</th>
            <th>Retrospecto</th>
        </tr>
        <?php foreach($aTimes as $time){
        echo '<tr>
               <td>'.$time['time'].'</td>
               <td>'.$time['posicao'].'</td>
               <td>'.$time['pontos'].'</td>
               <td>'.implode(', ', $time['retrospecto']).'</td>
             </tr>';     
        }
       ?>
    </table>
</body>
</html>
