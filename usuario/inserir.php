<<<<<<< HEAD
<?php
include '../conexao.php';

//recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

echo " testando: $nome $cpf $senha";


$sql = "INSERT INTO usuario(nome,cpf,senha) VALUES('$nome','$cpf','$senha')";
  //EXECUTAR CODIGO SQL
  $resultado = mysqli_query($conexao,$sql);

  header("location: ../principal.php");

=======
<?php
include '../conexao.php';

//recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

echo " testando: $nome $cpf $senha";


$sql = "INSERT INTO usuario(nome,cpf,senha) VALUES('$nome','$cpf','$senha')";
  //EXECUTAR CODIGO SQL
  $resultado = mysqli_query($conexao,$sql);

  header("location: ../principal.php");

>>>>>>> 9ab13b928b2436c97629773f17a00065b75e35cc
?>