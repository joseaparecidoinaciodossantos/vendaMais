<?php

include "../conexao.php";

//recebe do name dos inputs na tela as informações
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$cep = $_REQUEST['cpf'];
$estado = $_REQUEST['estado'];

$sql = "UPDATE usuario SET nome='$nome' , cep='$cep' , estado=' $estado' WHERE id='$id'";

$resultado = mysqli_query( $conexao,  $sql);

header(  'LOCATION:../cidade.php');
?>