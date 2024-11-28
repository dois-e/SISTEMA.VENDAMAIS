
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
$cargo = $_REQUEST['cargo'];
$cidade = $_REQUEST['cidade'];

$sql = "INSERT INTO funcionario(nome,cpf,celular,endereco,numero,bairro,email,cargo,cidade_id) VALUES('$nome','$cpf','$celular','$endereco','$numero','$bairro','$email','$cargo','$cidade')";
  //EXECUTAR CODIGO SQL
  $resultado = mysqli_query($conexao,$sql);

  header("location: ../funcionario.php");

?>