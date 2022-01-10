<?php
include_once 'conexao1.php';
$numero_conta = $_POST["numero_conta"];
$limite_conta = $_POST["limite_conta"];
$saldo_conta = $_POST["saldo_conta"];
$id = $_GET['id'];

$cadastro_conta = $pdo->prepare("INSERT INTO `conta` (`numero_conta`, `limite_conta`, `saldo_conta`, `usuario_id_usuario`)
 VALUES (:numero_conta, :limite_conta, :saldo_conta, :usuario_id_usuario);");
$cadastro_conta->execute(array(
    ':numero_conta' => $numero_conta,
    ':limite_conta' => $limite_conta,
    ':saldo_conta' => $saldo_conta,
    ':usuario_id_usuario' => $id
    ));
if ($cadastro_conta == true) {
 /*    echo "cadastrado com sucesso";
} else {
    echo "Desconectado";
} */
echo "<script>alert ('Cadastrado Com Sucesso!') </script>";
echo "<script> location.href = ('projeto_parte2.php')</script>";
} else {
//echo "Desconectado";
echo "<script> alert ('Não foi possivel Cadastrar!')</script>";
echo "<script>location.href = ('projeto_parte2.php')</script>";
}
?>