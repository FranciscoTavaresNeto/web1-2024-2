<?php
  $maior;
  $menor;
  if ($_REQUEST["num1"] >= $_REQUEST["num2"] && $_REQUEST["num1"] >= $_REQUEST["num3"]) {
    $maior = $_REQUEST["num1"];
  }
  if ($_REQUEST["num2"] >= $_REQUEST["num1"] && $_REQUEST["num2"] >= $_REQUEST["num3"]) {
    $maior = $_REQUEST["num2"];
  }
  if ($_REQUEST["num3"] >= $_REQUEST["num1"] && $_REQUEST["num3"] >= $_REQUEST["num2"]) {
    $maior = $_REQUEST["num3"];
  }
  if ($_REQUEST["num1"] <= $_REQUEST["num2"] && $_REQUEST["num1"] <= $_REQUEST["num3"]) {
    $menor = $_REQUEST["num1"];
  }
  if ($_REQUEST["num2"] <= $_REQUEST["num1"] && $_REQUEST["num2"] <= $_REQUEST["num3"]) {
    $menor = $_REQUEST["num2"];
  }
  if ($_REQUEST["num3"] <= $_REQUEST["num1"] && $_REQUEST["num3"] <= $_REQUEST["num2"]) {
    $menor = $_REQUEST["num3"];
  }
  echo "Maior Numero: ".$maior."<br>";
  echo "Menor Numero: ".$menor;
?>