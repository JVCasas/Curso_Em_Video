<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de preços</title>
</head>
<body>
    <?php 
        $perc = $_POST['perc']??1;
        $valor = $_POST['valor']??0;
        $reaj = $valor + ($valor * $perc / 100);
        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="valor">
            <label for="perc">Qual será o reajuste? (<span id="p">?</span>%)</label>
            <input type="range" name="perc" id="perc" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>
            O produto que custava R$<?=number_format($valor, 2, ',', '.')?> com <strong><?=$perc?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($reaj, 2, ',', '.')?></strong> a partir de agora. 
        </p>
    </section>
    <script>
        mudaValor();
        
        function mudaValor(){
            p.innerText = perc.value;
        };
    </script>
</body>
</html>