<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form method="post">

        Número:
        <input type="number" name="numero">

        <br><br>

        <input type="submit" value="Enviar">

        <br><br>

    </form>

    <?php

        include('sequencia.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $numero = $_POST["numero"];

            echo sequencia($numero);

        }

    ?>
</body>
</html>