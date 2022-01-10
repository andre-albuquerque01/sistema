<?php
include_once 'conexao1.php';
session_start();


$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$estado = $_POST["uf"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$complemento = $_POST["complemento"];


$id = $_SESSION["sessao_id"];
$consulta = $pdo->query("SELECT * FROM `usuario` WHERE `login_id_login` LIKE $id");

if ($consulta->rowCount()>0){
    echo "<script>alert ('Usuario Já tem um cadastro!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>";
}else{
$cadastro_usuario = $pdo->prepare("INSERT INTO `usuario` (`nome_usuario`, `telefone_usuario`, `cep_usuario`, `estado_usuario`, `cidade_usuario`, `bairro_usuario`, `rua_usuario`, `complemento_usuario`, `login_id_login`) 
VALUES (:nome_usuario, :telefone_usuario, :cep_usuario, :estado_usuario, :cidade_usuario, :bairro_usuario, :complemento_usuario, :rua_usuario, :login_id_login);");
$cadastro_usuario->execute(array(
':nome_usuario' => $nome,
':telefone_usuario' => $telefone,
':cep_usuario' => $cep,
':estado_usuario' => $estado,
':cidade_usuario' => $cidade,
':bairro_usuario' => $bairro,
':rua_usuario' => $rua,
':complemento_usuario' => $complemento,
':login_id_login' => $id
));
if($cadastro_usuario == true){
    // echo "Cadastrado Com Sucesso!";
    echo "<script>alert ('Cadastrado Com Sucesso!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>";
}else {
    //echo "Não foi possivel Cadastrar";
    echo "<script> alert ('Não foi possivel Cadastrar!')</script>";
    echo "<script>location.href = ('projeto_parte2.php')</script>";
}
}
?>