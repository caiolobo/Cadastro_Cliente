<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">   
   
<section id="listar_clientes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md=12">
                <h3>Lista de Usuários</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <table class="table" id="myTable">
            <thead>
              <tr>
                <th style="text-align: center">Nome</th>
                <th style="text-align: center">CPF</th>
                <th style="text-align: center">Rua</th>
                <th style="text-align: center">CEP</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include "_scripts/config.php";
                $sql = "SELECT * FROM base_cliente";
                $query = $mysqli->query($sql);
                while ($dados=$query->fetch_array()) {  
                ?>
              <tr>
                <td style="text-align: center">
                  <?php echo $dados['nome']; ?>                    
                </td>
                <td style="text-align: center"><?php echo $dados['cpf']; ?></td>
                <td style="text-align: center"><?php echo $dados['rua']; ?> </td>
                <td style="text-align: center"><?php echo $dados['cep']; ?> </td>
              </tr>
                <?php } ?>
            </tbody>
          </table>
 
 
 
        </div>
      </div>
 
    </section>
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap.bundle.js"></script>
    <script src="_js/cep.js"></script>
    <script src="_js/cpf.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

 
 
  </body>
</html>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable({"language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
        }});
  });
</script>