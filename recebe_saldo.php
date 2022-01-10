<?php
include_once 'conexao1.php';
$valor_extrato = $_POST["valor_extrato"];
$tipo_extrato = $_POST["tipo_extrato"];
$data_do_extrato = $_POST["data_do_extrato"];
$nome_extrato = $_POST["nome_extrato"];
$id_conta = $_POST["id_conta"];

$cadastro_extrato = $pdo->prepare("INSERT INTO `extrato` ( `tipo_extrato`,`nome_extrato`, `valor_extrato`, `data_extrato`, `conta_id_conta`)
    VALUES ( :tipo_extrato, :nome_extrato, :valor_extrato,   :data_extrato, :conta_id_conta)");
    $cadastro_extrato->execute(array(
        ':valor_extrato' => $valor_extrato,
        ':nome_extrato' => $nome_extrato,
        ':tipo_extrato' => $tipo_extrato,
        ':data_extrato' => $data_do_extrato,
        ':conta_id_conta' => $id_conta
        ));
if ($cadastro_extrato == true) {
    $consulta2 = $pdo->query("SELECT * FROM `conta` WHERE `id_conta` = $id_conta");    
    $veri2 = $consulta2->fetch(PDO::FETCH_ASSOC);
    $saldo1 = $veri2['saldo_conta'];
    $resultado = $saldo1 + $valor_extrato;
if($resultado >=0){
    $cadastro_extrato = $pdo->prepare("UPDATE `conta` SET `saldo_conta` = :saldo WHERE `conta`.`id_conta` = :id_conta;");
    $cadastro_extrato->execute(array(
    ':saldo' => $resultado,
    ':id_conta' => $id_conta
    ));

    echo "<script>alert ('Cadastrado Com Sucesso!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>";
} else {
   
    echo "<script> alert ('Não foi possivel Cadastrar!')</script>";
    echo "<script>location.href = ('projeto_parte2.php')</script>";
}}
?>