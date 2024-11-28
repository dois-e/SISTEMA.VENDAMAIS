
<?php
include '../conexao.php';

//recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$celular = $_REQUEST['celular'];
$endereco = $_REQUEST['endereco'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$email = $_REQUEST['email'];
$cidade = $_REQUEST['cidade'];

$sql = "INSERT INTO cliente(nome,cpf,celular,endereco,numero,bairro,email,cidade_id) VALUES('$nome','$cpf','$celular','$endereco','$numero','$bairro','$email','$cidade')";
  //EXECUTAR CODIGO SQL
  $resultado = mysqli_query($conexao,$sql);

  header("location: ../cliente.php");

?>