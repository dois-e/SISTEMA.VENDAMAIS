<?php
//totalizadores
$totalQuantidade = 0;
$totalValor = 0;

//buscar os itens de venda/produto venda atual
$itensVenda = $conexao->query("SELECT iv.id, p.nome,
iv.produto_id,iv.quantidade,iv.valor FROM 
item_venda iv JOIN produto p
ON iv.produto_id = p.id WHERE iv.venda_id= $idVenda");

$itensVenda->data_seek(offset: 0);

//atualizar totalidores
while($item = $itensVenda->fetch_assoc()){
    $totalQuantidade += $item['quantidade'];
    $totalValor += $item['quantidade'] * $item['valor'];

}
//atualizar o contador da venda
$conexao->query("UPDATE venda SET
data_venda = NOW(),
valor_total = $totalValor,
quantidade_total = $totalQuantidade
WHERE id = $idVenda
");



?>