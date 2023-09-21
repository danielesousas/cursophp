<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        // 0x = hexadecimal; 0b = binário; 0 = octal
        //$num = 010;
        //echo "O valor da variável é $num";

        /*$v = "Análise e Desenvolvimento de Sistemas";
        var_dump($v);
        ANALISA A VARIÁVEL
        */

        /*$num = 3e2; // 3 * 10(2)
        echo "O valor é $num";*/

       /* $num = (float)5e3; // 5 * 10(3)
        var_dump($num);*/

       /* $vet = [6, 2.5, "Maria", true, 5];
        var_dump($vet);*/
        
        class Pessoa {
            private string $nome;
            private string $sobrenome;
            private float $salario;
            private int $idade;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>