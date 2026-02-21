<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $valor = $_GET["valor"];
            $convercao = $valor * 0.18;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //print "Os seus R\$". number_format($valor, 2)."valem <strong>U\$".number_format($convercao,2)."<strong>";

            print "Os seus ". numfmt_format_currency($padrao, $convercao, "BRL")." valem <strong>".numfmt_format_currency($padrao, $convercao, "USD")."<strong>";
            //ligar intl no php.ini

        ?>

        <input type="button" value="&#x2b05 Voltar" onclick="javascript:history.go(-1)">
    </main>
    
</body>
</html>