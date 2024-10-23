<<<<<<< HEAD
<?php 

   include'../conexao.php';
    
   $id = $_REQUEST['id'];
   
   $sql = " DELETE FROM usuario WHERE id= '$id' ";
   $resultado = mysqli_query($conexao,$sql);
   header("location:../principal.php");
   

?>
=======
<?php 

   include'../conexao.php';
    
   $id = $_REQUEST['id'];
   
   $sql = " DELETE FROM usuario WHERE id= '$id' ";
   $resultado = mysqli_query($conexao,$sql);
   header("location:../principal.php");
   

?>
>>>>>>> 9ab13b928b2436c97629773f17a00065b75e35cc
