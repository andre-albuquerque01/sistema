 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Alterar</title>
 </head>
 <body>
     
  
  <style>
      .btn{
          /* color:blue;
          border-radius: 10px; */
            cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
            background: #104E8B;
            font-size: 90%;
            margin-left: 0%;
      }
</style>
  <?php
//include_once 'logado.php';
include_once 'conexao1.php';
session_start();
$id = $_SESSION["sessao_id"];
$recebe_consulta = $pdo->query("SELECT * FROM `login`");
while($verificar = $recebe_consulta->fetch(PDO::FETCH_ASSOC)){    
    echo "Login: ".$verificar["usuario_login"]."<br/>";
    echo "Senha: ".$verificar["senha_login"]."<br/>";
    echo "<form action='excluir_usuario.php' method='POST'>
    <button value=".$verificar['id_login']." name='id' class='btn'>Excluir </button> </form><br/>";
    echo "<form action='alterar_usuario.php' method='POST'>
    <button value=".$verificar['id_login']." name='id' class='btn'>Alterar </button> </form><br/>";
}
?> 
<form href='projeto_parte2.php'>
<button type="submit" class="btn">Voltar</button></form><br/>
<label><input type="submit" onclick="imprimir()" class="btn" value="Imprimir"></label>
<script>
    
    function imprimir(){
        window.print();
    }
    </script>
</body>
</html>