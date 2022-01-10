<?php
//include_once 'logado.php';
include_once 'conexao1.php';
session_start();
$id = $_SESSION["sessao_nome"];
/* $id = $_POST["id"]; */


$excluir = $pdo->prepare("DELETE FROM `login` WHERE `login`.`id_login` = :id");
$excluir->execute(array(
    ':id' => $id
));
if($excluir == TRUE){
    echo "<script> alert('Excluido Com Sucesso!') </script>";
    echo "<script> location.href='lista_registro.php' </script>";
}else{
    echo "<script> alert('Erro ao Excluir!') </script>";
}
?>