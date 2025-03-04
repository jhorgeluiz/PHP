<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exemplo de php</h1>
    <?php 
        date_default_timezone_set("america/fortaleza");
        echo "hoje é dia" .date("d/M/Y");
        echo "e a hora atual e:" .date("G:i:s T")
    ?>

    
</body>
</html>