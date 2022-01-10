<?php
include_once 'conexao1.php';
$valor_extrato = $_POST["valor_extrato"];
$tipo_extrato = $_POST["tipo_extrato"];
$data_do_extrato = $_POST["data_do_extrato"];
$nome_extrato = $_POST["nome_extrato"];
$id_conta = $_POST["id_conta"];



$cadastro = $pdo->prepare("INSERT INTO `extrato` ( `tipo_extrato`,`nome_extrato`, `valor_extrato`, `data_extrato`, `conta_id_conta`)
VALUES ( :tipo_extrato, :nome_extrato, :valor_extrato, :data_extrato, :conta_id_conta)");
$cadastro->execute(array(
    ':valor_extrato' => $valor_extrato,
    ':nome_extrato' => $nome_extrato,
    ':tipo_extrato' => $tipo_extrato,
    ':data_extrato' => $data_do_extrato,
    ':conta_id_conta' => $id_conta
    ));

if ($cadastro == true) {
      echo "<script>alert ('Com Sucesso!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>"; 
} else {
    echo "<script> alert ('Não foi possivel!')</script>";
    echo "<script>location.href = ('projeto_parte2.php')</script>";
}
    

?>