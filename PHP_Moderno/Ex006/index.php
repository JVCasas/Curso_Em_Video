<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritimeticas</title>
</head>
<body>
    <?php 
        $absolute = abs(500);

        print "$absolute";

        print "<br>";
        
        $absolute = abs(-2200);

        print "$absolute";

        print "<br>";
        print "<br>";

        $conversionBase = base_convert(20, 10, 8);

        print "$conversionBase";
        print "<br>";

        print ceil(9.3);
        print "<br>";
        print floor(9.3);
        print "<br>";
        print round(9.3);
        print "<br>";
        print "<br>";

        print 9/2;
        print "<br>";
        print intdiv(9, 2);

        //min(vetor) x max(vetor) -> retorna o menor/maior valor de um array
        //pi() -> chama o valor de pi, serve tambem a contante M_PI
        //hypot(angulo) -> calcula hipotenusa
        //pow(base, expoente) - > retorna uma potência, perde ordem de precedencia
        //sin(valor), cos(valor), tan(valor) -> alculam seno, cosseno e tangente de um valor
        //sqrt(valor) -> função de raiz quadrada


    ?>
    
</body>
</html>