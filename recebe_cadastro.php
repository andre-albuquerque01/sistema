<?php
include_once 'conexao1.php';
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

/*$cadastro = $pdo->prepare("INSERT INTO `login` (`usuario_login`, `senha_usuario`) VALUES (':usuario_login', ':senha_usuario');");
$cadastro->execute(array(
    ':usuario_login' => $usuario,
    ':senha_usuario' => $senha
));*/
$cadastro = $pdo->prepare("INSERT INTO `login` (`usuario_login`, `senha_login`) VALUES (:usuario, :senha);");
$cadastro->execute(array(
    ':usuario' => $usuario,
    ':senha' =>$senha
));
if ($cadastro == true) {
    echo "<script> alert('cadastro com sucesso!')</script>";
    echo "<script>location.href = ('index.php')</script>";
} else {
    echo "Não cadastrado";
    echo "<script>location.href = ('recebe_cadastro.php')</script>";
}
?>