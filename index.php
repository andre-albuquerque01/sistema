<html>
<head>
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
            /* cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
            background: #104E8B;
            font-size: 90%;
            margin-left: 0%; */
            cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    </style>
</head>
<body>
    <form action="recebe_login1.php" method="POST">
    <h2 style="margin-left: 2%; color: black;">Acessar</h2>
    <p>Usuario: <input type="text" name="nome" placeholder="Usuario" aria-label></p>
    <p>Senha: <input type="password" name="senha" placeholder="Senha" aria-label></p>
    <label><input type="submit" id="button" value="Entrar" style="margin-left: 2%; color: white; background: blue;"></label>
    </form>
    <form action="cadastro_login.php" method="POST">
    <label><input type="submit" id="button" value="Cadastrar" style="margin-left: 2%; color: white; background: red;"></label>
    </form>
    <form action="recuperar_login.php" method="POST">
    <label><input type="submit" id="button" value="Esqueci senha" style="margin-left: 2%; color: white; background: purple;"></label>
    </form>
    <div id="cicle1"></div>
    <div id="cicle2"></div>
</body>
</html>