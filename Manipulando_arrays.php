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

// ________________________________________________________
// Array multidimencionais
$jogo = array(
  array("ID"=>1, "NOME"=>"zé",    "PONTOS"=>11),
  array("ID"=>2, "NOME"=>"josé",  "PONTOS"=>4),
  array("ID"=>3, "NOME"=>"zeca",  "PONTOS"=>22)
);
print_r($jogo);
echo $jogo[1]["NOME"];



// formas mais adequanda de array multidimencionais
$jogo = [
  ["ID"=>1, "NOME"=>"zé",    "PONTOS"=>11],
  ["ID"=>2, "NOME"=>"josé",  "PONTOS"=>4],
  ["ID"=>3, "NOME"=>"zeca",  "PONTOS"=>22]
];

// ________________________________________________________
// VERIFICA SE A ESTRUTURA É UM AARRAY (is_array())
echo "valor = [] " . is_array( [] ) . "\n";
echo "valor = array() " . is_array( array() ) . "\n";
echo "valor = [1,2,3] " . is_array( [1,2,3] ) . "\n";
echo "valor = 1 " . is_array( 1 ) . "\n";

// ________________________________________________________
// RETORNA A QUANTIDADE DE ELEMENTOS (count())
echo "valor = [1,2,3,4] - " . count( [1,2,3,4] ) . "\n";
echo "valor = range(0,1000) - " . count( range(0,1000) ) . "\n";

// ________________________________________________________
// VERIFICA SE UM ELEMENTO ESTÁ CONTIDO (in_array)
echo "valor = in_array(2, [1,2,3,4,5]) - " . in_array(2, [1,2,3,4,5]) . "\n";
echo "valor = in_array(6, [1,2,3,4,5]) - " . in_array(6, [1,2,3,4,5]) . "\n";

// ________________________________________________________
// ORDENAÇÃO (sort())
$arr  = ["c", "a", "b", "f"];
sort($arr);

// ________________________________________________________
// INVERSÃO (array_reverse())
$arr  = ["1", "2", "3", "4"];
$arr = array_reverse($arr);

// ________________________________________________________
// SOMA (array_sum())
$arr  = ["1", "2", "3", "4"];
echo "a soma é: " .  array_sum($arr);


// ________________________________________________________
// JUNÇÃO DE ARRAYS (array_merge())
$arr1  = [1, 2];
$arr2  = ["a", "b"];
$x = array_merge($arr1, $arr2);


?>
