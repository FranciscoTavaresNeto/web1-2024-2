<html>
 <body><?php print_r($_REQUEST) ?></body>
</html>
<?php

  function validaForm() {
    if (validaAno() && validaEmail() && validaUF() && validaTermos() && validaTermos()) {
      print("Cadastro Realizado!");
    } else {
      print_r("cadastro inválido!");
    }
  }

  function validaUF() {
    if ($_REQUEST["uf"] !== "" && $_REQUEST["uf"] !== NULL) {
      return true;
    } else {
      return false;
    }
  }

  function validaEmail() {
    if ($_REQUEST["email"] !== $_REQUEST["c_email"] && $_REQUEST["email"] !== NULL && $_REQUEST["c_email"] !== NULL) {
      print_r("email inválido");
      return false;
    } else {
      return true;
    }
  }

  function validaAno() {
    if ($_REQUEST["ano"] - 2024 < 18 && $_REQUEST["ano"] !== NULL) {
      print_r("menor de 18 anos");
      return false;
    } else {
      return true;
    }
  }

  function validaTermos() {
    if ($_REQUEST["termos"] !== "on") {
      print_r("Termos Nao Aceitos");
      return false;
    } else {
      return true;
    }
  }

  function validaGenero() {
    if ($_REQUEST["genero"] !== null && $_REQUEST["genero"] !== "") {
      return true;
    }
  }

?>