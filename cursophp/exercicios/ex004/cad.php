<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_REQUEST["nome"] ?? "sem nome";
            $s = $_REQUEST["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te connhecer, <strong>$n $s</strong>! Esse é o meu site.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>