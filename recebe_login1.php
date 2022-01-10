<?php
include_once 'conexao1.php';
$nome = addslashes($_POST ["nome"]);
$senha = addslashes($_POST ["senha"]);
$contador = 0;
session_start();
if($nome == null || $senha == null){
    echo "<script> alert('Login Invalido!');</script>";
    echo "<script> locotion ='index.php';</script>";
   
    }
	//    $consulta = $pdo->query("SELECT * FROM `conta` WHERE `numero_conta` = $nome AND `senha_conta` = $senha"); 
    $consulta = $pdo->query("SELECT * FROM `login` WHERE `usuario_login` LIKE '$nome' AND `senha_login` LIKE '$senha'"); 
    
       while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
       $contador = $linha["id_login"];
    }
        if ($contador > 0){
            
            $_SESSION["sessao_id"]  = $contador;
            $_SESSION['sessao_nome'] = $nome;
            $_SESSION['sessao_senha'] = $senha;
            
            echo "<script>alert ('Login com Sucesso!') </script>";
           echo "<script> location.href = ('projeto_parte2.php')</script>"; 
       }else{
            echo "<script> alert ('Informações erradas!')</script>";
        echo "<script>location.href = ('index.php')</script>"; 
    }
?>
