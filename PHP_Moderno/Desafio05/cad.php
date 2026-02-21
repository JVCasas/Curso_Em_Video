<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analizador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analizador de Números Reais</h1>
        <?php 
            $valor = $_GET["numero"] ?? 0;
            $numero = number_format($valor, 3, ',', '.');
            $int = (int) $valor;
            $float = $valor - $int;

            print "Analisando o número <strong>$numero</strong>, informado pelo usuário.<br>";
            print "<ul>";
            print "<li>A parte inteira do número é <strong>".number_format($int, 0, ',','.')."</strong></li>";
            print "<li>A parte decimal do número é <strong>".number_format($float, 3, ',','.')."</strong></li>";
            print "</ul>";
        ?>
        <input type="button" onclick="javascript:history.go(-1)" value="Voltar">
    </main>

</body>
</html>