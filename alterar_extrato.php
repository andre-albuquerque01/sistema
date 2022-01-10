<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro extrato</title>
</head>
<style>
        body {
            background: #1B2029;
            color: white;
            font-weight: 100px;
        }
        label {
            margin-left: 18%;
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
            /* text-align: center; */
            
        }
        select{
            margin-left: 2%;
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
       
    </style>
<body>
<?php
include_once 'logado.php';
include 'conexao1.php';
$id = $_SESSION['sessao_id'];
$consulta2 = $pdo->query("SELECT * FROM `usuario` INNER JOIN conta ON usuario.id_usuario = conta.usuario_id_usuario INNER JOIN extrato ON conta.id_conta = extrato.conta_id_conta INNER JOIN login ON usuario.login_id_login = login.id_login WHERE usuario.login_id_login = $id");
$verificar = $consulta2->fetch(PDO::FETCH_ASSOC);
?>
    <form action="alterar_recebe_extrato.php?id=<?=$verificar['id_conta']?>" method="POST">
        <h2>Cadastro do extrato</h2>
        <p>Tipo</p>
        <select name="tipo_extrato"> 
            <option value="despesa"> Sacar </option>
            <option value="despesa"> Mercado </option>
            <option value="meta"> Outros</option>
        </select>
        <p>Nome da despesa: <input type="text" name="nome_extrato"  placeholder="Produto" aria-label="default input example" required></p>
        <p>Valor: <input type="number" name="valor_extrato" placeholder="Valor" aria-label="default input example" required></p>
        <p>Data: <input type="date" name="data_do_extrato"  placeholder="Data" aria-label="default input example" required></p>
        <button type="submit" id="button"  name="id_conta"> Cadastrar </button>
     
    </form>
    <div id="cicle1"></div>
    <div id="cicle2"></div>
    
</body>

</html>