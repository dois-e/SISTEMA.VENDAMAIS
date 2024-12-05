<?php
//adicionar produto 
    if($_SERVER['REQUEST_METHOD']=== 'POST' && ($_POST['produto'])){

        //adicionar produto diretamente a tabela venda 
        $produto = $_POST['produto'];
        $quantidade = $_POST['quaatidade'];

        // buscar preco do produto

        $resultado = $conexao->query("SELECT preco,estoque, FROM produtos WHERE id=$produtoId");
        $produto = $resultado->fetch_assoc();
        $preco = $produto['preco'];

    }


?>