<?php
  $maior;
  $menor;
  if ($_REQUEST["num1"] > $_REQUEST["num2"] && $_REQUEST["num1"] > $_REQUEST["num3"]) {
    echo $_REQUEST["num1"];
  }
  if ($_REQUEST["num2"] > $_REQUEST["num1"] && $_REQUEST["num2"] > $_REQUEST["num3"]) {
    echo $_REQUEST["num2"];
  }
  if ($_REQUEST["num3"] > $_REQUEST["num1"] && $_REQUEST["num3"] > $_REQUEST["num2"]) {
    echo $_REQUEST["num3"];
  }
  if (($_REQUEST["num1"] > $_REQUEST["num2"] && $_REQUEST["num1"] < $_REQUEST["num3"]) || ($_REQUEST["num1"] < $_REQUEST["num2"] && $_REQUEST["num1"] > $_REQUEST["num3"])) {
    echo $_REQUEST["num1"];
  }
  if (($_REQUEST["num2"] > $_REQUEST["num1"] && $_REQUEST["num2"] < $_REQUEST["num3"]) || ($_REQUEST["num2"] < $_REQUEST["num1"] && $_REQUEST["num2"] > $_REQUEST["num3"])) {
    echo $_REQUEST["num2"];
  }
  if (($_REQUEST["num3"] > $_REQUEST["num2"] && $_REQUEST["num3"] < $_REQUEST["num1"]) || ($_REQUEST["num3"] < $_REQUEST["num2"] && $_REQUEST["num3"] > $_REQUEST["num1"])) {
    echo $_REQUEST["num3"];
  }
  if ($_REQUEST["num1"] < $_REQUEST["num2"] && $_REQUEST["num1"] < $_REQUEST["num3"]) {
    echo $_REQUEST["num1"];
  }
  if ($_REQUEST["num2"] < $_REQUEST["num1"] && $_REQUEST["num2"] < $_REQUEST["num3"]) {
    echo $_REQUEST["num2"];
  }
  if ($_REQUEST["num3"] < $_REQUEST["num1"] && $_REQUEST["num3"] < $_REQUEST["num2"]) {
    echo $_REQUEST["num3"];
  }
?>