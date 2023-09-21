<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
<link rel="stylesheet" href="style.css"></head>
<body>
    <?php 
        $min = 1_380.60;
        $sal = $_GET['sal'] ?? $min;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($min, "2", ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($sal, $min);
            $dif = $sal % $min;
            
            echo "<p>Quem recebe um salário de R\$". number_format($sal, 2, ",", ".")." ganha $tot salários mínimos + R\$ ". number_format($dif, 2, ',', '.') ."</p>";
        ?>
    </section>
</body>
</html>