<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes</title>
</head>
<body>
    <?php 
        $numero = $_POST['numero']??0;
        $raizQ = number_format($numero ** (1/2), 3, ',', '.');
        $raizC = number_format($numero ** (1/3), 3, ',', '.');
    ?>
    <main>    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.001">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o numero <strong><?=number_format($numero ** (1/2), 3, ',', '.')?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raizQ?></strong></li>
            <li>A sua raiz Cubica é <strong><?=$raizC?></strong></li>
        </ul>
    </section>
</body>
</html>