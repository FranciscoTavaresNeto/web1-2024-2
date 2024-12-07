<?php
  switch ($_REQUEST["idade"]) {
    case $_REQUEST["idade"] < 13:
      print_r("Crianca");
      break;
    case $_REQUEST["idade"] <= 19 && $_REQUEST["idade"] >= 13:
      print_r("Adolescente");
      break;
    case $_REQUEST["idade"] < 60 && $_REQUEST["idade"] > 19:
      print_r("Adulto");
      break;
    case $_REQUEST["idade"] > 60:
      print_r("Idoso");
      break;
    default:
      echo "ERRO!".$_REQUEST;
      break;
  }
?>