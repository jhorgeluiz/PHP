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
        $n = $_REQUEST["num"] ?? 0;
        $antecessor = $n -1;
        $sucessor = $n +1;

        echo "O numero digitado foi $n";
        echo "</br>O seu antecessor é: $antecessor";
        echo "</br>O seu sucessor é: $sucessor"; 
        ?>
    </main>
</body>
</html>