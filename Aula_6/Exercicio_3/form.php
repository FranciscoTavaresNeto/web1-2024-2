<?php
  switch ($_REQUEST["idade"]) {
    case $_REQUEST["idade"] < 13:
      echo "Crianca";
      break;
    case $_REQUEST["idade"] <= 19 && $_REQUEST["idade"] >= 13:
      echo "Adolescente";
      break;
    case $_REQUEST["idade"] < 60 && $_REQUEST["idade"] > 19:
      echo "Adulto";
      break;
    case $_REQUEST["idade"] > 60:
      echo "Idoso";
      break;
    default:
      echo "ERRO!".$_REQUEST;
      break;
  }
?>