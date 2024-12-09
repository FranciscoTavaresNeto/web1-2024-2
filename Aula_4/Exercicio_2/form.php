<?php
  $resultado = 1;
  $divisor = 10;

  for ($i=2; $i <= $divisor; $i++) {
    $resultado = $resultado + (1/$i);
  }
  print_r($resultado);
?>