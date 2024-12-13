<?php 
    include '../conexao.php';

    $idVenda = $_REQUEST['idVenda'];
    $idItem = $_REQUEST['idItem'];
    $qtd = $_REQUEST['qtd'];
    $idProd = $_REQUEST['idProd'];

    //atualizar o estoque do produto ,estornar ,voltar
    $sqlNovoEstoque = "UPDATE produto SET estoque = estoque + qtd
    where id = '$idProd' ";
    //excluir o item venda
    $sql = "DELETE FROM item_venda WHERE id='$idItem'";
    $resultado = mysqli_query($conexao,query:$sql);

    header( "location: ../venda.php?idVenda=$idVenda");



?>