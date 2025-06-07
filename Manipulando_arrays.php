<?php 

// Iterando array com foreach
$lista = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];

foreach ($lista as $item) {
  echo $item . "\n";
}

// _____________________________________________________
// Iterando o array com foreach e chave
$lista = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];

foreach ($lista as $chave => $valor) {
 echo "$chave: $valor \n";
}

// _______________________________________________________
// Array Associativo
$pontos = ["zé"=>11, "josé"=>4, "zeca"=>22];
echo "zé: " . $pontos["zé"] . "\n";
echo "josé: " . $pontos["josé"] . "\n";
echo "zeca: " . $pontos["zeca"] . "\n";

?>
