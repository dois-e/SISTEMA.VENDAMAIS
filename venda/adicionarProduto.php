<?php
//adicionar produto 
    if($_SERVER['REQUEST_METHOD']=== 'POST' && ($_POST['produto'])){

        //adicionar produto diretamente a tabela venda 
        $produtoId = $_POST['produto'];
        $quantidade = $_POST['quantidade'];

        // buscar preco e estoque do produto de acordo com o id,do seletor do fromt ent

        $resultado = $conexao->query("SELECT preco,estoque FROM produto WHERE id=$produtoId");
        $produto = $resultado->fetch_assoc();
        $preco = $produto['preco'];
        $estoqueAtual = $produto['estoque'];

        //atualizar o estoque do produto
        $novoEstoque = $estoqueAtual - $quantidade;
        $conexao->query("UPDATE produto SET estoque  = $novoEstoque where id=$produtoId");

        //INSERIR O PRODUTO NA TABELA ITEM-VENDA
        $conexao->query("INSERT INTO item_venda(venda_id, produto_id, quantidade,valor)
        VALUES ($idVenda,$produtoId,$quantidade,$preco)");

        header("location:venda.php?idVenda=$idVenda");


    }


?>