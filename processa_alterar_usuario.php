<?php 
include_once 'conexao1.php';
$email = $_POST["email"];
$senha = $_POST["senha"];
$id = $_GET["id"];
$cadastro = $pdo->prepare("UPDATE `login` SET `usuario_login` = :email, `senha_login` = :senha
 WHERE `login`.`id_login` = :id;");
$cadastro->execute(array(
    ':email' => $email,
    ':senha' => $senha,
    ':id' => $id
));
if($cadastro == TRUE){
    echo "<script> alert('Alterado Com Sucesso!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>";
}else{
    echo "<script> alert('Erro ao Alterar!') </script>";
    echo "<script> location.href = ('alterar_usuario.php')</script>";
}

?>