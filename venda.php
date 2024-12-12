
<?php

include 'conexao.php';
include 'validacao.php';

//casojá exista um id de venda 
if(!empty($_GET['idVenda'])){
    $idVenda = $_GET['idVenda'];
}else{
    //criar uma nova venda
    $conexao->query("INSERT INTO venda (data_venda) VALUES (NOW())");
    //obter o id da nova venda
    $idVenda = $conexao->insert_id;
}

include './venda/adicionarProduto.php';

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Venda</title>
    <link rel="stylesheet" href="./recursos/venda.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png"
    href="https://cdn-icons-png.flaticon.com/512/5607/5607725.png">
</head>
<body>
    <div class="container">
       
       <div class="row">
    <div class="col-md-8">
        <h3>TELA DE VENDA</h3>
        <form action="" method="POST">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Produto</label>
                    <select class="form-control" name="produto">
                        <?php
                             $resultado = $conexao->query("select id,nome,preco,estoque FROM produto");
                             while($coluna = $resultado->fetch_assoc()){

                                echo"<option value='{$coluna['id']}'>
                                {$coluna['nome']} -
                                Estoque: {$coluna['estoque']} -
                                preco: {$coluna['preco']}
                                <option>";

                             }
                             ?>
                       
                    </select>
                </div>
                    <div class="form-group col">
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" required class="form-control"> 
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary" style="margin-top: 32px;">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                     <table class="table mt-4 table-striped table-bordered table-sm">
                     <thead>
                          <th class="col-6">Produto</th>
                          <th class="col-1" >Quantidade</th>
                          <th class="col-2">Valor</th>
                          <th class="col-2">Total</th>
                          <th class="col-1">Opções</th>
                     </thead>
                     <tbody>
                        <?php
                             include './venda/atualizarTabela.php';
                             $itensVenda->data_seek(offset: 0 );
                             while($item = $itensVenda->fetch_assoc()){

                             
                             ?>
                        <tr>
                            <td><?php echo $item['nome'] ?> </td>
                            <td><?php echo $item['quantidade'] ?> </td>
                            <td><?php echo $item['valor'] ?> </td>
                            <td><?php echo $item['quantidade'] * $item['valor']?> </td>
                            <td> <a href=""> <i class="fa-solid fa-circle-minus" style="color:red"></i></a> </td>
                          
                        </tr>
                        <?php } ?>
                     </tbody>

                    </table>

                   </div>
                
            </div>
        </form>
   
     <div class="col-md-4">
       <h3>Resumo da Venda</h3>
       <form action="" method="post">
        <div class="form-group">
            <label>Cliente</label>
            <select class="form-control">
                <option>Joao</option>
                 <option>Aline</option>
            </select>
        </div>       
            <div class="form-group">
                <label> Funcionário</label>
                <select class="form-control">
                        <option>Juliano</option>
                        <option>Julia</option>      
                </select>
            </div>
          <div class="form-group">
            <label>Quantidade Total</label>
            <input type="text" class="form-control" value="<?php echo $totalQuantidade ?>" readonly>

          </div> 
           <div class="form-group">
            <label>Valor Total</label>
            <input type="text" class="form-control" value="<?php echo $totalValor ?>" readonly>

          </div>
          <div class="form-group">
             <label>Observação</label>
             <textarea class="form-control"></textarea>
             
          </div>

          <a href="" class="btn btn-success">Finalinar</a>
          <a href="" class="btn btn-danger">Finalinar</a>
       </form>

     </div>

     </div>
    
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>