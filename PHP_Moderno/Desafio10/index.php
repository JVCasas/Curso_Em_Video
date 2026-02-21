<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Idade</title>
</head>
<body>
    <?php 
        $anoAtual = date('Y');
        $ano = $_POST['ano'] ?? $anoAtual;
        $nascimento = $_POST['nascimento'] ?? $anoAtual - 1;
        $idade = $ano - $nascimento;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" id="nascimento" name="nascimento" required max="<?=$anoAtual - 1?>">
            <label for="ano">Quer saber sua idade em qual ano? (atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" id="ano" name="ano" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> ano(s)</strong> de idade em <?=$ano?></p>
    </section>
</body>
</html>