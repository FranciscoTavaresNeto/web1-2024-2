<?php
  $resultado = 1;
  $fatorial = 10;

  for ($i=2; $i <= $fatorial; $i++) {
    $resultado = $resultado * $i;
  }
  print_r($resultado);
?>