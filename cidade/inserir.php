<?php
include '../conexao.php';

//recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$estado = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];


$sql = "INSERT INTO cidade(nome,estado,cep) VALUES('$nome','$estado','$cep')";
  //EXECUTAR CODIGO SQL
  $resultado = mysqli_query($conexao,$sql);

  header("location: ../cidade.php");

?>