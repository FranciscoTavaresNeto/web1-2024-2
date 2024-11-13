<?php
  if ($_REQUEST["num1"]%10 === 0) {
    echo "Divisível por 10! <br>";
  }
  if ($_REQUEST["num1"]%5 === 0) {
    echo "Divisível por 5! <br>";
  }
  if ($_REQUEST["num1"]%2 === 0) {
    echo "Divisível por 2! <br>";
  }
  if ($_REQUEST["num1"]%2 !== 0 && $_REQUEST["num1"]%5 !== 0 && $_REQUEST["num1"]%10 !== 0) {
    echo "Divisível por nenhum";
  }
?>