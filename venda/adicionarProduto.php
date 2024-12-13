<?php

    //adicionar Produto
    if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['produto'])){

        //Adicionar produto diretamente à tabela item_venda
        $produtoId = $_POST['produto'];
        $quantidade = $_POST['quantidade'];

        //buscar preço e estoque do produto de acordo com o id, do seletor do front-end
        $resultado = $conexao->query("SELECT preco, estoque FROM produto WHERE id=$produtoId");
        $produto = $resultado->fetch_assoc();
        $preco = $produto['preco'];
        $estoqueAtual = $produto['estoque'];

        //atualizar o estoque do produto
        $novoEstoque = $estoqueAtual - $quantidade;
        $conexao->query("UPDATE produto SET estoque = $novoEstoque WHERE id=$produtoId");

        //inserir o produto na tabela item_venda
        $conexao->query("INSERT INTO item_venda(venda_id, produto_id, quantidade, valor) 
        VALUES ($idVenda, $produtoId, $quantidade, $preco)");
        
        header("Location: venda.php?idVenda=$idVenda");
    }

?>