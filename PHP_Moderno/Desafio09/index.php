<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias</title>
</head>
<body>
    <?php 
        $v1 = $_POST['v1']??0;
        $v2 = $_POST['v2']??0;
        $p1 = $_POST['p1']??1;
        $p2 = $_POST['p2']??1;
        $mediaArit = ($v1 + $v2) / 2;
        $mediaPond = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
    ?>
    <main>
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" required>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Calculo das médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li><strong>A Média Aritimética Simples</strong> entre os valores é igual a <?=$mediaArit?></li>
            <li><strong>A Média Aritimética Ponderada</strong> com os pesos <?=$p1?> e <?=$p2?> é igual a <?=$mediaPond?></li>
        </ul>
    </section>
</body>
</html>