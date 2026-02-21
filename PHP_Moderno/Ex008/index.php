<!DOCTYPE html>
<html lang="ptp-brs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $value1 = $_POST['v1']??0;
        $value2 = $_POST['v2']??0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $value1?>">
            <label for="v2">Valor 1</label>
            <input type="number" name="v2" id="v2" value="<?= $value2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $value1 + $value2;
            print "A soma entre os valores $value1 e $value2 é igual a $soma"
        ?>
    </section>
</body>
</html>