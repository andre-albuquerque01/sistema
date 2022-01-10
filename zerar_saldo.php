<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zerar</title>
</head>

<?php
include_once 'logado.php';
include_once 'conexao1.php';
if (isset($_POST['pesquisa']) != null) {
    $zero = 0;
    $id = $_SESSION['sessao_id'];
    $consulta2 = $pdo->query("SELECT * FROM `usuario` INNER JOIN conta ON usuario.id_usuario = conta.usuario_id_usuario INNER JOIN extrato ON conta.id_conta = extrato.conta_id_conta INNER JOIN login ON usuario.login_id_login = login.id_login WHERE usuario.login_id_login = $id");
    $verificar = $consulta2->fetch(PDO::FETCH_ASSOC);
    $altera = $pdo->prepare("UPDATE `extrato` SET `valor_extrato` = :valor_extrato WHERE conta_id_conta =". $verificar['id_conta']);
    $altera->execute(array(
        ':valor_extrato' => $zero
    ));
    echo "<script>alert ('Redefinido com Sucesso!') </script>";
    echo "<script> location.href = ('projeto_parte2.php')</script>";
}
?>

<body>

    <form method="POST" id="form-pesquisa" action="">
        <label>Deseja zerar? </label>
        <input type="submit" name="pesquisa" id="pesquisa">
    </form>
    <div id="cicle1"></div>
    <div id="cicle2"></div>

</body>

</html>