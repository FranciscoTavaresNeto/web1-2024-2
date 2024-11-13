<?php
  switch ($_REQUEST["option"]) {
    case 1:
      echo "Soma: ".$_REQUEST["num_1"]+$_REQUEST["num_2"];
      break;
    case 2:
      echo "Subtracao: ".$_REQUEST["num_1"]-$_REQUEST["num_2"];
      break;
    case 3:
      echo "Multiplicacao: ".$_REQUEST["num_1"]*$_REQUEST["num_2"];
      break;
    case 4:
      echo "Divisao: ".$_REQUEST["num_1"]/$_REQUEST["num_2"];
      break;
    case 5:
      echo "Potenciacao: ".$_REQUEST["num_1"]**$_REQUEST["num_2"];
      break;
    default:
      echo "ERRO!".$_REQUEST;
      break;
  }
?>
