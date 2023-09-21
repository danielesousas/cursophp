<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? '0';
        $reaj = $_GET['reaj'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01"  value="<?=$preco?>" required>
            <label for="reaj">Qual será o percentual do reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$reaj?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $novopreco = $preco + ($preco * $reaj / 100);
    ?>
    <section>
        <h2>Resultado</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ',', '.')?> com o aumento de <?=$reaj?>% agora custa <strong><?=number_format($novopreco, 2, ',', '.')?>.</strong></p>
    </section>
    <script>
        //Declarações Automáticas
        mudaValor()
        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>