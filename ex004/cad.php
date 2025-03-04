<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobr = $_GET["sobrenome"];
            echo "<p> é um prazer te conhecer, $nome $sobr! este é o meu site!";
        ?>

        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    </main>
</body>
</html>