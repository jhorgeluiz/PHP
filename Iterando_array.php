<?php 

$lista = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];
$qnt = count($lista);

echo "A lista tem:  $qnt dias da semana \n";

for ($i=0; $i < $qnt; $i++) { 
  echo $lista[$i] . "\n";
}


?>
