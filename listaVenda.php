<?php
include "validacao.php";
include "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sistema Venda+ </title>

  <link rel="shortcut icon" type="imagex/png" href="https://cdn-icons-png.flaticon.com/512/5607/5607725.png">

  <link rel="stylesheet" href="./recursos/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />



</head>

<body>

  <?php include 'menusuperior.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 menu">

        <?php include 'menulateral.php'; ?>



      </div>
      <div class="col-md-9">

        <div class="row">

          <div class="col-md card">
            <h3> Listagem </h3>

            <table class="table" id="tabela">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">cliente</th>
                  <th scope="col">funcionario</th>
                  <th scope="col">data</th>
                  <th scope="col">quantidade</th>
                  <th scope="col">total</th>
                  <th scope="col">obs</th>
                  <th scope="col">Opções</th>
                </tr>
              </thead>
              <tbody>

                <?php
                //sql para selecionar todos os vendas
                $sql = "SELECT * FROM venda ";
                $resultado = mysqli_query($conexao, $sql);
                //looping onde $coluna , vai representar dados do banco 
                //a cada linha é uma registro diferemte
                while ($coluna = mysqli_fetch_assoc($resultado)) {

                  ?>
                 
                  <tr>
                    <th><?php echo $coluna["id"] ?></th>
                    <td>
                      <?php
                    $dados = $conexao->query("SELECT * FROM cliente WHERE id='{$coluna['cliente_id']}'");
                    $dados = mysqli_fetch_assoc($dados);
                    echo $dados['nome']; ?>
                     </td>
                    <td>  
                    <?php
                    $dados = $conexao->query( "SELECT * FROM funcionario WHERE id='{$coluna['funcionario_id']}'");
                    $dados = mysqli_fetch_assoc($dados);
                    echo $dados['nome']; ?> 
                    </td>
                    <td> <?php 
                    $data = new DateTime($coluna['data_venda']);
                    echo $data->format('d/m/Y H:i') ?>
                     </td>
                    <td><?php echo $coluna["quantidade_total"] ?> </td>
                    <td><?php echo $coluna["valor_total"] ?> </td>
                    <td><?php echo $coluna["obs"] ?> </td>
                    <td>
                      <a href="principal.php?idAlt=<?= $coluna['id'] ?>"><i class="fa-solid fa-pen-to-square mr-3"
                          style="color: #00ff11;"></i></i></i></a>
                      <a href="<?php echo './venda/excluir.php?id=' . $coluna['id'] ?>"><i class="fa-solid fa-trash"
                          style="color: #ff0000;"></i></i></a>
                    </td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>

        </div>


      </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
      integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./recursos/script.js"></script>
</body>

</html>