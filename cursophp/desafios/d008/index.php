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
        //Área de Declarações
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            //$rq = $num ** (1/2);
            $rq = sqrt($num);
            $rc = $num ** (1/3);

            echo "<p>Analisando o número <strong>$num</strong>...</p>";
            echo "<ul><li>A sua raí quadrada é <strong>" .number_format($rq, 2, ',', '.')."</strong>.</li>";
            echo "<li>A sua raíz cúbica é <strong>".number_format($rc, 2, ',', '.')."</strong>.</li><ul>";
        ?>
    </section>
</body>
</html>