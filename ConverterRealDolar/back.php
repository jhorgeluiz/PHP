<?php 

$cotação = 5.17;

$real = $_REQUEST["din"] ?? 0;

$dolar = $real / $cotação;

$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

echo "Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>