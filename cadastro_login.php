<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tudo">
        <form action="recebe_cadastro.php" method="POST">
            <h2>Cadastro de sua conta</h2>
            <p>Email: <input type="email" name="usuario" require></p>
            <p>Senha: <input type="password" name="senha" require></p>
            <label><input type="submit" id="button" value="Cadastrar" style="margin-left: 2%; color:white;"></label>
        </form>
    </div>
    <div id="cicle1"></div>
    <div id="cicle2"></div>

</body>

</html>