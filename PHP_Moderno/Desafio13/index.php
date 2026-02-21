<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
    <title>Caixa Eletronico</title>
</head>
<body>
    <?php 
        $saque = $_POST['saque']??0;
        $cem = floor($saque / 100);
        $resto = $saque % 100;
        $cinquenta = floor($resto / 50);
        $resto = $resto % 50;
        $dez = floor($resto / 10);
        $resto = $resto % 10;
        $cinco = $resto / 5;
        //$cinco = floor($resto / 5);
        //$cinco = intdiv($resto, 5); codigo tambem valido
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="aque">Qual o valor que deseja sacar?</label>
            <input type="number" name="saque" id="saque" step="5">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ',', '.')?></h2>
        <p>O Caixa Eletrônico irá lhe entregar as seguintes notas:</p>
        <ul>
            <li><img src="imgs/100-reais.jpg" alt="100 Reais" class="nota">x<?=$cem?></li>
            <li><img src="imgs/50-reais.jpg" alt="50 Reais" class="nota">x<?=$cinquenta?></li>
            <li><img src="imgs/10-reais.jpg" alt="10 Reais" class="nota">x<?=$dez?></li>
            <li><img src="imgs/5-reais.jpg" alt="5 Reais" class="nota">x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>