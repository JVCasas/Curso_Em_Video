<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <?php 
        $seg = $_POST['seg']??0;
        $semanas = intdiv($seg, 604800);
        $resSem = $seg % 604800;
        $dias = intdiv($resSem, 86400);
        $resDia = $resSem % 86400;
        $horas = intdiv($resDia, 3600);
        $resHor = $resDia % 3600;
        $minutos = intdiv($resHor, 60);
        $segundos = $resHor % 60;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?=$seg?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> Semanas</li>
            <li><?=$dias?> Dias</li>
            <li><?=$horas?> Horas</li>
            <li><?=$minutos?> Minutos</li>
            <li><?=$segundos?> Segundos</li>
        </ul>
    </section>
</body>
</html>