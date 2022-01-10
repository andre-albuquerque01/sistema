<?php 
//include_once 'conexao.php';
//echo $login = $_POST["email"];
//echo $senha = $_POST["senha"];
//echo $id = $_POST["id"];
?>
<?php 
include_once 'conexao1.php';
$senha = $_POST["senha"];
$id = $_POST["id"];
$cadastro = $pdo->prepare("UPDATE `login` SET `senha_login` = :senha WHERE `login`.`id_login` = :id;");
$cadastro->execute(array(
    ':senha' => $senha,
    ':id' => $id
));
if($cadastro == TRUE){
    echo "<script> alert('Alterado Com Sucesso!') </script>";
     echo "<script> location.href = ('index.php')</script>";
}else{
    echo "<script> alert('Erro ao Alterar!') </script>";
    echo "<script> location.href = ('index.php')</script>";
}

?>