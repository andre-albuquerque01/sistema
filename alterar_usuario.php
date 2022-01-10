<html>
<head>
    <title>Alterar de Login</title>
    <style>
        body {
            background: #1B2029;
            color: white;
            font-weight: 100px;
        }
        p{
            margin-left: 2%;
            color: black;
            font-family: 'Akaya Telivigala', cursive;
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
            /* margin-top: 10px; */
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
    </style>
</head>
<body>
<?php
include_once 'logado.php';
include_once 'conexao1.php';
$id = $_SESSION['sessao_id'];
?>

    <form action="processa_alterar_usuario.php?id=<?=$id?>" method="POST">
    <h2 style="margin-left: 2%;">Alterar Login</h2>
    <p>Login <input type="text" name="email"></p>
    <p>senha <input  type="text" name="senha"></p>
    <button type="submit" id="button" name="id"> Alterar </button>
    </form>
    <div id="cicle1"></div>
    <div id="cicle2"></div>
</body>
</html>
