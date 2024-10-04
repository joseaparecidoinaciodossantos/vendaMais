<?php

// importando arquivo de conexão com o banco.
include 'conexao.php';


//recebendo dados da tela de login (frontend)
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];


$sql = "select * from usuario where cpf='$cpf' and senha='$senha'";

  //executa código SQL com a permissão da conexão
  $resultado = mysqli_query($conexao, $sql);

  //cada valor é associado ao nome da coluna no banco
  $colunas = mysqli_fetch_assoc($resultado);

  if(mysqli_num_rows($resultado) > 0 ){
      echo "Login efetuado com sucesso!";
      session_start();
      $_SESSION['usuario'] = $colunas['nome'];
      $_SESSION['cpf'] = $cpf;
      $_SESSION['senha'] = $senha;

      //direcionar para pagina principal
      header('location: principal.php');
  }else{
    
      echo "Errooouu! não encontrado!";
      session_unset();
      session_destroy();
      header( 'location: index.php');
  }


?>