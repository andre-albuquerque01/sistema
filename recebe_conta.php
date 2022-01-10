<?php
include_once 'conexao1.php';
$numero_conta = $_POST["numero_conta"];
$limite_conta = $_POST["limite_conta"];
$saldo_conta = $_POST["saldo_conta"];
include_once 'session_start()';

$email = $_SESSION['sessao_lohin'] ;
/* $consulta = $pdo->query("SELECT id_login FROM `login` WHERE `usuario_login` LIKE '$email'");
$veri = $consulta->fetch(PDO::FETCH_ASSOC);
$id =  intval($veri['id_login']); */

$consulta2 = $pdo->query("SELECT id_usuario FROM `usuario` WHERE `login_id_login` = $email");
$veri2 = $consulta2->fetch(PDO::FETCH_ASSOC);
$usuario_id_usuario =  intval($veri2['id_usuario']);

/* $consulta3 = $pdo->query("SELECT id_extrato FROM `saque_extrato` WHERE `id_extrato` = $id");
$veri3 = $consulta3->fetch(PDO::FETCH_ASSOC);
$testando =  intval($veri3['id_extrato']); */

/* $alterar = $pdo->prepare("UPDATE `conta` SET `saldo_conta` = '5' WHERE `conta`.`id_conta` = $id;");

$recebe_consulta = $pdo->query("SELECT * FROM `login` WHERE id_login LIKE ".$id);
$verificar = $recebe_consulta->fetch(PDO::FETCH_ASSOC);   */

$id = $_SESSION["sessao_id"];
$cadastro_conta = $pdo->prepare("INSERT INTO `conta` (`numero_conta`, `limite_conta`, `saldo_conta`, `usuario_id_usuario`)
 VALUES (:numero_conta, :limite_conta, :saldo_conta, :usuario_id_usuario);");
$cadastro_conta->execute(array(
    ':numero_conta' => $numero_conta,
    ':limite_conta' => $limite_conta,
    ':saldo_conta' => $saldo_conta,
    ':usuario_id_usuario' => $usuario_id_usuario
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