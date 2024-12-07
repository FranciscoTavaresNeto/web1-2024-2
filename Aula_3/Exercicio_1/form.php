<?php
  $mediaFinal = ($_REQUEST["nota1"] + $_REQUEST["nota2"] + $_REQUEST["nota3"])/3;
  switch ($mediaFinal) {
    case $mediaFinal >= 6:
      print_r("Média: ".$mediaFinal."<br>");
      print_r("Aprovado!");
      break;
    case $mediaFinal < 6:
      print_r("Média: ".$mediaFinal."<br>");
      print_r("Reprovado!");
      break;
  }
?>