<?php

session_start();
//destruir a sessao
session_destroy();
//limpar a variavel
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

//manda para o login
header('location:index.php');
?>