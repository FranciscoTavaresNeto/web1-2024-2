<?php
  switch ($_REQUEST["mes"]) {
    case $_REQUEST["mes"] > 13 || $_REQUEST["mes"] < 1:
      print_r("Mês Inválido");
      break;
    case $_REQUEST["mes"] == 1:
      print_r("Janeiro");
      break;
    case $_REQUEST["mes"] == 2:
      print_r("Fevereiro");
      break;
    case $_REQUEST["mes"] == 3:
      print_r("Marco");
      break;
    case $_REQUEST["mes"] == 4:
      print_r("Abril");
      break;
    case $_REQUEST["mes"] == 5:
      print_r("Maio");
      break;
    case $_REQUEST["mes"] == 6:
      print_r("Junho");
      break;
    case $_REQUEST["mes"] == 7:
      print_r("Julho");
      break;
    case $_REQUEST["mes"] == 8:
      print_r("Agosto");
      break;
    case $_REQUEST["mes"] == 9:
      print_r("Setembro");
      break;
    case $_REQUEST["mes"] == 10:
      print_r("Outubro");
      break;
    case $_REQUEST["mes"] == 11:
      print_r("Novembro");
      break;
    case $_REQUEST["mes"] == 12:
      print_r("Dezembro");
      break;
  }
?>