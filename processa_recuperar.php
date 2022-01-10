<html>

<head>
    <title> </title>
    <style>
         body {
            background: #1B2029;
            color: white;
            font-weight: 100px;
        }
        label {
            /* display: flex;
            flex-direction: column;
            font-size: 18px;
            /* align-items: center; 
            z-index: 1000 */
            margin-left: 3.6%;
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
        #button {
            cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
            background: #104E8B;
            font-size: 90%;
            margin-left: 0%;
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
            clip-path: circle(30% at left 0%);
            z-index: -1;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    </style>
</head>
<?php 
include_once 'conexao1.php';

$email = $_POST["email"];
$esqueci = $pdo->query("SELECT * FROM `login` WHERE usuario_login LIKE '$email'");
$verificar = $esqueci->fetch(PDO::FETCH_ASSOC); 
?>
<body>
    <form action="processa_segunda_parte.php" method="POST">
        <h2>Recuperar a conta</h2>
        <p>Email: <input type="email" value="<?php  echo $verificar["usuario_login"] ?>" name="email" require></p>
        <p>Senha: <input type="password"  name="senha" require></p>
        <button type="submit" id="button" name="id" value="<?php  echo $verificar["id_login"] ?>" style="margin-left: 2%; color:white;">Cadastrar </button>
    </form>
    <div id="cicle1"></div>
    <div id="cicle2"></div>
    <div id="imagem"> 
        <img src="https://raw.githubusercontent.com/giovannamoeller/sign-up-form/8e94664e87e1e591bf244d352e675dbd5167bcdf/assets/mobile.svg" style="width: 30%; height: 50%;  margin-left: 70%; margin-top: 4%; z-index: -1;">
    </div> 
</body>

</html>



