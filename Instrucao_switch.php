<?php 

// A instrução switch em PHP é usada para avaliar uma variável contra múltiplos 
// valores possíveis e executar diferentes blocos de código com base em qual valor corresponde.
// É uma alternativa mais limpa que múltiplos if/elseif quando se está testando uma mesma variável com diferentes valores.

// EXEMPLO:

$dia = "quarta";

switch ($dia) {
    case "segunda":
        echo "Início da semana.";
        break;
    case "quarta":
        echo "Metade da semana.";
        break;
    case "sexta":
        echo "Fim da semana chegando!";
        break;
    default:
        echo "Dia comum.";
}



// Observações importantes:
// Use break após cada case para evitar que os próximos case também sejam executados (isso se chama fall-through).
// O default é opcional e funciona como um else — executa o bloco caso nenhum case combine.
// O switch compara os valores usando comparação fraca (==), então tipos diferentes podem ser considerados iguais.
?>
