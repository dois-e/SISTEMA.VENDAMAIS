<?php  
include "../conexao.php";

//recebe do nome dos inpus na tela as informa

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$preco = $_REQUEST['preco'];
$estoque = $_REQUEST['estoque'];
$custo = $_REQUEST['custo'];
$lucro = $_REQUEST['lucro'];
$margem = $_REQUEST['margem'];

$sql = "UPDATE produto SET nome='$nome', preco='$preco', estoque='$estoque', custo='$custo', lucro='$lucro', margem='$margem' WHERE id='$id' ";
$resultado = mysqli_query($conexao,$sql);

header('Location:../produto.php');

?>
