<?php
  $maxValorParcela = $_REQUEST["renda"]*0.3;
  $parcelaFinanciamento = $_REQUEST["financiamento"]/$_REQUEST["parcelas"];

  switch ($maxValorParcela) {
    case $_REQUEST["parcelas"] > 180 || $parcelaFinanciamento > $maxValorParcela:
      print_r("Financiamento Recusado");
      break;
    default:
      print_r("Financiamento Aprovado!<br>");
      print_r("Parcelas: ".$_REQUEST["parcelas"]."x de ".$parcelaFinanciamento);
      break;
  }
?>