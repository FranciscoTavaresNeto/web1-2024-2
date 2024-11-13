<?php
  $acertos = 0;
  $gabarito;
  $gabarito [1] = $_REQUEST["num_1"]+$_REQUEST["num_2"];
  $gabarito [2] = $_REQUEST["num_1"]-$_REQUEST["num_2"];
  $gabarito [3] = $_REQUEST["num_1"]*$_REQUEST["num_2"];
  $gabarito [4] = $_REQUEST["num_1"]/$_REQUEST["num_2"];
  print_r($gabarito);
?>
<html>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <form action="result.php" method="post">
    <label>Soma:</label>
    <input class="w3-input" type="number" name="result1">
    <button type="submit" class="w3-button w3-hover-purple">Enviar</button>
    <label>Subtracao:</label>
    <input class="w3-input" type="number" name="result2">
    <button type="submit" class="w3-button w3-hover-purple">Enviar</button>
    <label>Multiplicacao:</label>
    <input class="w3-input" type="number" name="result3">
    <button type="submit" class="w3-button w3-hover-purple">Enviar</button>
    <label>Divisao:</label>
    <input class="w3-input" type="number" name="result4">
    <button type="submit" class="w3-button w3-hover-purple">Enviar</button>
  </form>
</html>
<?php
  if ($gabarito [1] === $_REQUEST["result1"]) {
    $acertos++;
    echo "soma ok";
  }
  if ($gabarito [2] === $_REQUEST["result2"]) {
    $acertos++;
    echo "subtracao ok";
  }
  if ($gabarito [3] === $_REQUEST["result3"]) {
    $acertos++;
    echo "multi ok";
  }
  if ($gabarito [4] === $_REQUEST["result4"]) {
    $acertos++;
    echo "div ok";
  }
  echo $acertos;
?>