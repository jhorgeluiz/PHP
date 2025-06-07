<?php 


if (isset($_POST["edtabuada"])) {
  $tabuada = $_POST["edtabuada"];

  if (!is_numeric($tabuada)) {
    echo "nao é um numero";
  } else {
    for ($num = 0; $num <= 10; $num ++) { 
      echo $tabuada . "x" . $num . " = " . ($tabuada * $num). "<br>";
    }

  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <label for="">Digite um número:</label>
    <input type="text" name="edtabuada" >
    <input type="submit" value="calcular">
  </form>
</body>
</html>
