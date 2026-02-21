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
            $data = date('m-d-Y');
            $dataPassado = date('m-d-Y', strtotime("-7 days"));
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-21-2024\'&@dataFinalCotacao=\'10-28-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
            $resultado = json_decode(file_get_contents($url), true);
            $cotacao = $resultado["value"][0]["cotacaoCompra"];
            $convercao = $valor / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //print "Os seus R\$". number_format($valor, 2)."valem <strong>U\$".number_format($convercao,2)."<strong>";

            print "Os seus ". numfmt_format_currency($padrao, $valor, "BRL")." valem <strong>".numfmt_format_currency($padrao, $convercao, "USD")."<strong>";
            //ligar intl no php.ini

        ?>

        <input type="button" value="&#x2b05 Voltar" onclick="javascript:history.go(-1)">
    </main>
    
</body>
</html>