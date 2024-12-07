<?php
  switch ($_REQUEST["tanque"]) {
    case $_REQUEST["tanque"] <= -50 || $_REQUEST["tanque"] >= 500:
      print_r("CRÍTICO");
      break;
    case $_REQUEST["tanque"] <= 300 && $_REQUEST["tanque"] >= 0:
      print_r("Normal");
      break;
    default:
      echo "Alerta!".$_REQUEST;
      break;
  }
?>