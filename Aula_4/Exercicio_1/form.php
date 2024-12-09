<?php
  $distanciaViagem = (($_REQUEST["origem"] - $_REQUEST["destino"])*111);
  $pontoAtual = $_REQUEST["origem"]*111;
  $tempoViagem = 0;

  for ($pontoAtual; $distanciaViagem > $pontoAtual; $pontoAtual = $pontoAtual + $_REQUEST["velocidade"]) {
    if ($tempoViagem%24 == 0) {
      print_r("Parada do Dia: ".$pontoAtual/111);
    }
    $tempoViagem++;
  }
?>