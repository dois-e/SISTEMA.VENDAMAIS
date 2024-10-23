<<<<<<< HEAD

<?php
//iniciar sessão
session_start();

// se não existe variavel de sessão CPF ou SENHA
if(!isset($_SESSION["cpf"]) or !isset($_SESSION['senha'])){
    //destruir a sessão
    session_destroy();

    //limpar variáveis de sessão
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    //manda para o login
    header('location: index.php');
}
=======

<?php
//iniciar sessão
session_start();

// se não existe variavel de sessão CPF ou SENHA
if(!isset($_SESSION["cpf"]) or !isset($_SESSION['senha'])){
    //destruir a sessão
    session_destroy();

    //limpar variáveis de sessão
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    //manda para o login
    header('location: index.php');
}
>>>>>>> 9ab13b928b2436c97629773f17a00065b75e35cc
?>