<?php 

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['produto'])){

//Adicionar produto diretamente á tabela item_venda
$produtoID = $_POST['produto'];
$quantidade = $_POST['quantidade'];

//buscar preco do produto

$resultado = $conexao->("SELECT preco, estoque FROM produtos WHERE id=$produtoID");
$produto = $resultado-> ();
$preco = $produto['preco'];

}







?>