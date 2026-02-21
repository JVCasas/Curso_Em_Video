<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
        <?php 
            $numero = $_GET["numero"]??0;

            echo "O numero escolhido foi <strong>$numero</strong>.<br>";
            echo "O seu antecessor é ".$numero - 1 .".<br>";
            echo "O seu sucessor é ".$numero + 1 .".<br>";

        ?>
        </p>

        <input type="button" value="&#x2b05 Voltar" onclick="javascript:history.go(-1)">

    </main>
    
</body>
</html>