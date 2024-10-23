<?php
include'../conexao.php';

// recebendo os dados do front_end

$nome = $_REQUEST['nome'];
$estado = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];




$sql= "INSERT INTO cidade(nome, estado, cep) VALUES ('$nome', '$estado','$cep')";

// executar codigo sql

$resultado = mysqli_query( $conexao, $sql);

header("LOCATION: ../cidade.php");

?>