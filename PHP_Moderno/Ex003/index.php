<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos - PHP</title>
</head>
<body>
    <h1>Teste tipos primitivos</h1>
    <?php 
        $num = 0x1a;

        //0x -> numero hexadecimal | 0b -> numero binario | 0 -> octal

        //echo "o valor da variável é $num<br>";
        //var_dump($num);

        //$num = 3e2;

        //var_dump($num);

        //$num = (integer) 3e2;

        //var_dump($num);

        //$casado = false;

        //var_dump($casado);

        //echo "a variavel é: $casado";

        //$casado = true;

        //echo "a variavel é: $casado";

        //$vector = [6, 2.5, "maria", false];

        //var_dump($vector);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)

    ?>
</body>
</html>