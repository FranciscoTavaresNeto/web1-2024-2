<?php
  $imc = $_REQUEST["peso"]/($_REQUEST["altura"]*$_REQUEST["altura"]);
  if ($imc > 25) {
    echo "Voce está acima do Peso!";
  } else {
    echo "Voce está saudável";
  }
?>