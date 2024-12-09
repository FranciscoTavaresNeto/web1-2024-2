<?php
  $acrescimo = 3;
  $_REQUEST["valorCarro"];
  print_r("<table>");
  print_r("<tr>");
  print_r("<th>Preco Final</th>");
  print_r("<th>Quantidade de Parcelas</th>");
  print_r("<th>Valor das Parcelas</th>");
  print_r("</tr>");
  for ($parcelas=6; $parcelas <= 60; $parcelas = $parcelas + 6) {
    print_r("<tr><th>".($_REQUEST["valorCarro"] + ($_REQUEST["valorCarro"]*($acrescimo/100)))."</th><th>".$parcelas."</th><th>".($_REQUEST["valorCarro"] + ($_REQUEST["valorCarro"]*($acrescimo/100)))/$parcelas."</th></tr>");
    $acrescimo = $acrescimo + 3;
  }
  print_r("</table>");
?>