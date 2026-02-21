<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_POST['dividendo']??0;
        $divisor = $_POST['divisor']??1;
        $resto = $dividendo % $divisor;
        //$resultado = ($dividendo - $resto) / $divisor;
        $resultado = intdiv($dividendo, $divisor);
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>