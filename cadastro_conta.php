<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Banco</title>
    <style>
body {
            background: #1B2029;
            color: white;
            font-weight: 100px;
        }
        
        p{
            margin-left: 2%;
            color: black;
        }
        input {
            background:#90EE90;
            width: 150px;
            height: 22px;
            color: black;
            font-size: 14px;
            padding: 0 0.5%;
            margin-top: 1%;
            outline: none;
            border: 1px #040B18;
            border-radius: 10px;
            z-index: -1;
            display: flex;
           /*  text-align: center; */
            
        }
        #button {
            cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
            background: #104E8B;
            font-size: 90%;
            margin-left: 2%;
            color: wheat;
        }
        #cicle1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #F0F8FF, #6495ED);
            clip-path: circle(30% at right 100%);
            z-index: -1;
        }

        #cicle2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #F0F8FF, #6495ED);
            clip-path: circle(40% at left 0%);
            z-index: -1;
        }
       /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');*/

    </style>
</head>
<?php
include_once 'logado.php';
include_once 'conexao1.php';
$id = $_GET['id'];
?>
<body>
    <h2 style="margin-left: 2%;">Cadastro Conta</h2>
    <form action="recebe_conta.php?id=<?=$id?>" method="POST">
            <p>Numero da conta: <input type="number" name="numero_conta"  placeholder="Numero da conta" aria-label="default input example" require></p>
            <p>Limite: <input type="number" step="0.01" name="limite_conta" placeholder="Limite" aria-label="default input example" require></p>
            <p>Saldo: <input type="number" step="0.01" name="saldo_conta"  placeholder="Saldo" aria-label="default input example" require></p>
            <label><input type="submit" id="button" value="cadastrar" style="margin-left: 2%; text-align: center; color:blanchedalmond"></label>
   <div id="cicle1"></div>
    <div id="cicle2"></div>
    <div id="imagem"> 
        <img src="https://raw.githubusercontent.com/giovannamoeller/sign-up-form/8e94664e87e1e591bf244d352e675dbd5167bcdf/assets/mobile.svg" style="width: 30%; height: 50%;  margin-left: 70%; margin-top: -1%; z-index: -1;">
    </div> 
    </form>
</body>

</html>