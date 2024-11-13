<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="valida.php">
      <label for="nome">Nome:</label>
      <input  type="text" name="nome"/><br>
      <label for="masc">Masc</label>
      <input  type="radio" name="genero" value="MASC">
      <label for="fem"> Fem</label>
      <input  type="radio" name="genero" value="FEM"><br>
      <label for="email">Email:</label>
      <input  name="email" type="email"/><br>
      <label for="c_email">Confirme o email:</label>
      <input  name="c_email" type="email"/><br>
      <label for="ano">Ano Nascimento:</label>
      <input  type="text" name="ano"/><br>
      <label for="cidade">Cidade:</label>
      <input  type="text" name="cidade"/><br>
      <label for="uf">UF:</label>
      <select  name="uf">
        <option></option>
        <option value="ac">AC</option>
        <option value="al">AL</option>
        <option value="ap">AP</option>
        <option value="am">AM</option>
        <option value="ba">BA</option>
        <option value="ce">CE</option>
        <option value="es">ES</option>
        <option value="go">GO</option>
        <option value="ma">MA</option>
        <option value="mt">MT</option>
        <option value="ms">MS</option>
        <option value="mg">MG</option>
        <option value="pa">PA</option>
        <option value="pb">PB</option>
        <option value="pr">PR</option>
        <option value="pe">PE</option>
        <option value="pi">PI</option>
        <option value="rj">RJ</option>
        <option value="rn">RN</option>
        <option value="rs">RS</option>
        <option value="ro">RO</option>
        <option value="rr">RR</option>
        <option value="sc">SC</option>
        <option value="sp">SP</option>
        <option value="se">SE</option>
        <option value="to">TO</option>
        <option value="df">DF</option>
      </select><br>
      <label for="termos">Aceito os Termos</label>
      <input  type="checkbox" name="termos"/><br>
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>