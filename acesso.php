<?php
   include 'conexao.php';

   $cpf = $_REQUEST['cpf'];
   $senha = $_REQUEST['senha'];


   $sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

    //executa código SQL com a permissão da conexão
    $resultado = mysqli_query($conexao, $sql);

    //cada valor é associado ao nome da coluna no banco
    $colunas = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado) > 0 ){
       // echo "Login efetuado com sucesso!";
       session_start();
       $_SESSION['usuario'] = $colunas['nome'];
       $_SESSION['cpf'] = $cpf;
       $_SESSION['senha'] = $senha;

       //direcionar para pagina principal
       header(header: 'location:principal.php');

    }else{
        //echo "Errooouu! não encontrado!";
        session_unset();
        session_destroy();
        header( 'location: index.php');
    }
  
  ?>
