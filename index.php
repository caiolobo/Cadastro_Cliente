<?php include "header.php"; ?>
<?php include "menu.php"; ?>
   

    <section id="cadastro">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h3>Cadastro de Clientes</h3>
          </div>
        </div>
      </div>
 
      <div class="container-fluid col-md-6">
        <form class="row g-3" method="post" action="">
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">CPF</label>
            <input type="text" class="form-control" maxlength="14" name="cpf" id="cpf" required onblur="validarCPF(this)">
          
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" required>
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">CEP</label>
            <input name="cep" type="text" class="form-control" required  id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" >
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Rua</label>
            <input name="rua" type="text" class="form-control" required readonly id="rua" size="60" />
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Bairro</label>
            <input name="bairro" type="text" class="form-control" required readonly id="bairro" size="60" />
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Cidade</label>
            <input name="cidade" type="text" class="form-control" required readonly id="cidade" size="60" />
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Estado</label>
            <input name="estado" type="text" class="form-control" required readonly id="uf" size="60" />
          </div>
 
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Situação</label>
            <select class="form-control" name="situacao">
              <option value="">-</option>
              <option value="ATIVO">ATIVO</option>
              <option value="DESATIVADO">DESATIVADO</option>
            </select>
          </div>
 
 
 
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </section>

    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="_js/cep.js"></script>
    <script src="_js/cpf.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>



  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
  $('#cpf').mask('000.000.000-00', {reverse: true});
  $('#cep').mask('00000-000');
});
</script>


<?php
if(!empty($_POST)){ 

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $cep = $_POST['cep'];
  $rua = $_POST['rua'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $situacao = $_POST['situacao'];
  
  include "_scripts/config.php";
  $sql = "INSERT INTO base_cliente 
  (nome,email,cpf,cep,rua,bairro,cidade,estado,situacao) 
  VALUES ('$nome','$email','$cpf','$cep','$rua','$bairro','$cidade','$estado','$situacao')";
$query = $mysqli->query($sql);

  if($query){
?>
<script type="text/javascript">
Swal.fire(
"Salvo!",
  "Cadastro realizado com sucesso!",
  "success");
</script>
<?php } 

else {?>
  <script type="text/javascript">
Swal.fire("erro!",
  "Por favor, tente novamente!",
  "success");
</script>

<?php } } ?>