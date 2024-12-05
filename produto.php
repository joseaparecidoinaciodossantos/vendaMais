<?php 
include "validacao.php";
include "conexao.php";
//destino do formulario para inserir por padrão
$destino = './produto/inserir.php';
//se idALT for diferente de vazio - se existir idALT
if(!empty($_GET['idALT'])){
  //guarda na váriavel $id o valor da pessoa clicado no lápis da tabela 
  $id = $_GET['idALT'];

  $sql = "SELECT * FROM produto.php WHERE id='$id' ";
//variável com nossos dados:
  $dados= mysqli_query(  $conexao, $sql);
  //váriavel com nossos dados:

  $dadosALT = mysqli_fetch_assoc( $dados);
  
  $destino = './produto/alterar.php';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema Venda+ </title>
    <link rel="stylesheet" href="./recursos/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
    <link rel="shortcut icon" type="imagex/png"
    href="https://cdn-icons-png.flaticon.com/512/5607/5607725.png">



  


</head>
<body>

    <?php INCLUDE 'menusuperior.php';?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu">
              <?php INCLUDE 'menulateral.php';?>
            </div>
            <div class="col-md-9"> 

                <div class="row">

                    <div class="col-md card">
                        <h3> Cadastro </h3>

                        <form action="<?=$destino?> " method="post"> 
                        <div class="form-group">
                              <label > Id </label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['id'] : '' ?>" type="text" name="id" readonly class="form-control"placeholder="seu id">
                              
                            </div>

                            <div class="form-group">
                              <label >nome</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['nome'] : '' ?>" type="text" name="nome" class="form-control"placeholder="seu nome" required>
                              
                            </div>
                             
                             
                            <div class="form-group">
                              <label >preco</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['preco'] : '' ?>" type="number" name="preco" class="form-control cpf" placeholder="preco" required>
                            </div>

                            <div class="form-group">
                              <label >estoque</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['estoque']: '' ?>" type="number" name="estoque" class="form-control" placeholder="estoque" required>
                            </div>
                            <div class="form-group">
                              <label >custo</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['custo']: '' ?>" type="number" name="estoque" class="form-control" placeholder="custo" required>
                            </div>
                            <div class="form-group">
                              <label >lucro</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['lucro']: '' ?>" type="number" name="estoque" class="form-control" placeholder="lucro" required>
                            </div>
                            <div class="form-group">
                              <label >margem</label>
                              <input value="<?php echo isset($dadosALT) ? $dadosALT['margem']: '' ?>" type="number" name="estoque" class="form-control" placeholder="margem" required>
                            </div>


                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-danger">limpar</button>
                          </form>
                    </div>    

                    <div class="col-md card">
                        <h3> Listagem </h3>
                     
                        <table class="table" id="tabela">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">nome</th>
                                <th scope="col">preco</th>
                                <th scope="col">estoque</th>
                                <th scope="col">opções</th>
                              </tr>
                            </thead>
                            <tbody>


                            <?php
                            //sql para selecionar todos os usuarios

                              $sql = " SELECT* FROM produto";
                              $resultado = mysqli_query(  $conexao,  $sql);

                              //looping onde $coluna, vai representar os dados do banco

                              //a cada linha é um registro diferente

                              while($coluna = mysqli_fetch_assoc( $resultado)) {
                              ?>

                              <tr>
                                <th><?php echo $coluna['id'] ?> </th>
                                <td> <?php echo $coluna['nome'] ?> </td>
                                <td> <?php echo $coluna['preco'] ?> </td>
                                <td> <?php echo $coluna['estoque'] ?> </td>
                                <td> 
                                  <a href="principal.php?idALT=<?= $coluna['id'] ?>"><i class="fa-solid fa-pen-to-square mr-3"></i></a>
                                  <a href="<?php echo './usuario/excluir.php?id=' .$coluna['id'] ?> "><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                              </tr>

                              <?php } ?>
                              
                            </tbody>
                          </table>
                    </div> 
                    
                </div>

            </div>
        </div>
    </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./recursos/script.js"></script>
</body>
</html>

