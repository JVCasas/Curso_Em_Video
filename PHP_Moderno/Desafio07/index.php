<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Minimo</title>
</head>
<body>
    <?php 
        $sal = $_POST['salario']??0;
        $salMin = 1380;
        $resto = $sal % $salMin;
        $resultado = intdiv($sal, $salMin);
    ?>
    <main>
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <label for="salario">Salario (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?="Quem rescebe um salário de <strong> R\$ ".number_format($sal, 2, ',', '.')."</strong> ganha <strong>$resultado salário(s) minimo(s)</strong> + R\$".number_format($resto, 2, ',', '.')?>
    </section>

</body>
</html>