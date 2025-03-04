<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
        $max = 100;
        $min = 0;
        $num = mt_rand($min, $max);
        echo "O numero gerado entre $min e $max foi: <strong>$num</strong>"
        ?>
    </main>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
</body>
</html>