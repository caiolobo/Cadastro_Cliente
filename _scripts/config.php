<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'crud';

//instanciamos a classe para acessar o banco
$mysqli = new mysqli($servidor,$usuario,$senha,$banco);

//verifica se houve erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno())

?>