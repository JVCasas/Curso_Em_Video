<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteio de número</title>
</head>
<body>
    <main>
        <h1>Número aleatório</h1>
        <p>
            gerando um numero aleatório ente 0 e 100:
            <br>
            <?php 
                //$numero = rand(0,100);
                //random_int() --> criptografia (lento)
                $numero = mt_rand(0,100);
                print "O número gerado foi o $numero";
            ?>
        </p>
        <input type="button" value="&#x1F504 Novo Número" onclick="javascript:document.location.reload()">
    </main>
</body>
</html>