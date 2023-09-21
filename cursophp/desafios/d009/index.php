<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desaio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'];
        $peso1 = $_GET['p1'];
        $valor2 = $_GET['v2'];
        $peso2 = $_GET['p2'];

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analsando os valores de <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>
                A <strong>Média Aritmética Simples</strong> entre os valores <?=$valor1?> e <?=$valor2?> é igual a <strong><?=number_format($ma, 2, ",", ".")?></strong>.
            </li>
            <li>
                A <strong>Média Aritmética Ponderada</strong> entre os valores <?=$valor1?> e <?=$valor2?> é igual a <strong><?=number_format($mp, 2, ",", ".")?>.</strong>
            </li>
        </ul>
    </section>
</body>
</html> 