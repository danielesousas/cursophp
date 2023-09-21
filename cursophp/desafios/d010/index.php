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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '1980';
        $ano = $_GET['ano'] ?? $atual;
        $idade = $ano - $nasc; 
    ?>
    <main>
        <h1>Calculando Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>" required min="1900" max="<?=$atual?>" >
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$atual?>" min="<?=$nasc?>" required>
            <input type="submit" value="Qual será a idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> ano(s)</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>