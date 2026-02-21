<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos - PHP</title>
</head>
<body>
    <h1>Strings PHP</h1>
    <?php 
    //string com aspas duplas intepretada (crase do js)
    //string com aspas simples leitura literal (aspas simples/duplas do js)
    $nome = "Fabio";

    echo "Olá $nome <br>";

    echo 'Olá $nome <br>';

    const ESTADO = "RJ";

    echo 'mora no ESTADO';
    
    echo '<br>';

    echo "mora no ESTADO";
    
    echo '<br>';

    echo "mora no ".ESTADO;

    echo '<br>';
    echo '<br>';

    $nom = "Rodrigo";

    $snom = "Nogueira";

    echo '$nom "Minotauro" $snom';

    echo '<br>';

    //echo "$nom "Minotauro" $snom";

    echo "$nom \"Minotauro\" $snom";

    echo '<br>';

    // \" -> "
    // \t -> Tabulação Horizontal
    // \n -> nova linha
    // \\ -> \
    // \$ -> $
    // \u{} -> codigo unicode

    $curso = "php";

    $ano = date('Y');

    //Heredoc - "aspas duplas"
    echo <<<FRASE
        Estou estudando $curso,
                no ano de $ano.
        Como esta sendo esse o ano $ano?
        \u{1f596}
    FRASE;//quebra de texto apenas no formato texto, não funciona no html

    echo '<br>';

    //Nowdoc - "aspas duplas"
    echo <<<'FRASE'
        Estou estudando $curso,
                no ano de $ano.
        Como esta sendo esse o ano $ano?
        \u{1f596}
    FRASE;//quebra de texto apenas no formato texto, não funciona no html

    $teste = 'curso';

    echo '<br>';

    echo "$$teste";
    
    ?>
</body>
</html>