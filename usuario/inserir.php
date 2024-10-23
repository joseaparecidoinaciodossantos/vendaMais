<?php
include'../conexao.php';

// recebendo os dados do front_end

$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

echo "testando :$nome $cpf $senha";


$sql= "INSERT INTO usuario(nome, cpf, senha) VALUES ('$nome', '$cpf','$senha')";

// executar codigo sql

$resultado = mysqli_query( $conexao, $sql);

header("LOCATION: ../principal.php");

?>