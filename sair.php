<<<<<<< HEAD
<?php

session_start();
//destruir a sessao
session_destroy();
//limpar a variavel
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

//manda para o login
header('location:index.php');
=======
<?php

session_start();
//destruir a sessao
session_destroy();
//limpar a variavel
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

//manda para o login
header('location:index.php');
>>>>>>> 9ab13b928b2436c97629773f17a00065b75e35cc
?>