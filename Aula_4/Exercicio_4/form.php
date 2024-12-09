<?php
  $vendidos = 126;
  print_r("<table>");
  print_r("<tr>");
  print_r("<th>Preco do Ingresso</th>");
  print_r("<th>Ingressos Vendidos</th>");
  print_r("<th>Lucro Total</th>");
  print_r("</tr>");
  for ($preco=5; $preco >= 1; $preco = $preco - 0.5) {
    print_r("<tr><th>".$preco."</th><th>".$vendidos."</th><th>".(($vendidos*$preco)-200)."</th></tr>");
    $vendidos = $vendidos+26;
  }
  print_r("</table>");
?>