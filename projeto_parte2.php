<html>

<head>
  <meta charset="UTF-8">
  <title>Saúde Financeira</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</head>
<style>
  body {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 30% 45%;
    background: #1B2029;
    color: white;
    font-weight: 100px;
  }
  #caixa {
    border: solid 2px rgb(31, 32, 121);
    margin-left: 21%;
    width: 20%;
    height: 100px;
    text-align: center;
    color: whitesmoke;
    border-radius: 50px;
    font-style: oblique;
    font-family: arial, sans-serif;
    position: absolute; 
    margin-top: 15%;
    
  }

  #meta {
    border: solid 2px rgb(31, 32, 121);
    margin-left: 45%;
    width: 20%;
    height: 100px;
    text-align: center;
    color: whitesmoke;
    border-radius: 50px;
    font-style: oblique;
    font-family: arial, sans-serif;
    position: absolute;
    margin-top: 15%;
    
  }
  #alcançar1 {
    background-color: none;
    border: solid 2px rgb(31, 32, 121);
    margin-left: 70%; 
    width: 20%;
    height: 100px;
    text-align: center;
    color: white;
    border-radius: 50px;
    font-style: oblique;
    font-family: arial, sans-serif;
    margin-top: 15%;
  }
  a {
    text-decoration: none;
  }
  .btn-glyphicon {
    padding: 8px;
    margin-right: 4px;
  }
  .icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius: 50px;
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

<body>
<?php
//include_once 'logado.php';
session_start();
$id = $_SESSION['sessao_id'];
?>
  <div id="corpo">
      <div id="caixa" class="btn btn-outline-dark">
      <a value='<?php echo $id?>' href="cadastro_saldo.php">
        <h2> Saldo:</h2>
      </a>
      <?php
        include_once 'conexao1.php';
        $pesquisa = $pdo->query("SELECT SUM(saldo_conta) FROM `conta`");
        $veri = $pesquisa->fetch(PDO::FETCH_ASSOC);
        echo $verifica =  $veri['SUM(saldo_conta)'];
        ?>
    </div>
    <div id="meta" class="btn btn-outline-dark">
      <a value='<?php echo $id?>' href="alterar_extrato.php">
        <h2>Despesa:</h2>
      </a>
      <?php
        include_once 'conexao1.php';
        $pesquisa1 = $pdo->query("SELECT SUM(valor_extrato) FROM `extrato` WHERE `tipo_extrato` LIKE 'despesa'");
        $veri1 = $pesquisa1->fetch(PDO::FETCH_ASSOC);
        echo $verifica =  $veri1['SUM(valor_extrato)'];
        ?>
    </div>
    
    <div id="alcançar1" class="btn btn-outline-dark">
      <a value='<?php echo $id?>' href="metas.php">
        <h2>Meta:</h2>
      </a>
      <?php
        include_once 'conexao1.php';
        $pesquisa2 = $pdo->query("SELECT SUM(valor_extrato) FROM `extrato` WHERE `tipo_extrato` LIKE 'meta'");
        $veri2 = $pesquisa2->fetch(PDO::FETCH_ASSOC);
        echo $verifica2 =  $veri2['SUM(valor_extrato)'];
        ?>
    </div><br />
    
  </div>
  <div id="cicle1"></div>
    <div id="cicle2"></div>
 <!-- <style>
   #select{
    outline: none;
    margin-top: -22%;
    margin-left: 88%;
   }
 </style>    
<div id="select">
<select name="menu" id="selecao" onchange="redirecionar()">
  <option value="index.php">Adicionar saldo</option>
  <option value="alterar_extrato.php">Adicionar despesa</option>
  <option value="cadastro_usuario.php">Adicionar usuario</option>
  <option value="alterar_usuario.php">Alterar Usuario</option>
  <option value="excluir_usuario.php">Excluir</option>
  <option value="sair.php">Sair</option>
</select>
</div>

<script>
function redirecionar(){
  var site = document.getElementById('selecao').value;
 location.href = (site);

}
 
</script>
-->
<style>

body{
	font-family: 'PT Sans', sans-serif;
	/* background-color: #373c56; */ 
}
#menu{
	width: 35px;
	height: 30px;
	margin: 30px 0 20px 20px;
	cursor: pointer;
}
.bar{
	height: 5px;
	width: 100%;
	background-color: black;
	display: block;
	border-radius: 5px;
	transition: 0.3s ease;
}
#bar1{
	transform: translateY(-4px);
}
#bar3{
	transform: translateY(4px);
}
.nav li a
{
	color: #fff;
	text-decoration: none;
}
.nav li a:hover
{
	font-weight: bold;
}
.nav li
{
	list-style: none;
	padding: 16px 0;
}
.nav
{
	padding: 0;
	margin: 0 20px;
	transition: 0.3s ease;
	display: none;
}
.menu-bg, #menu-bar{
	top:0;
	left: 0;
	position: absolute;
}
.menu-bg{
	z-index: 1;
	width: 0;
	height: 0;
	margin: 30px 0 20px 20px;
	background: radial-gradient(circle,#00BFFF,#0000CD);
	border-radius: 50%;
	transition: 0.3s ease;
}
#menu-bar{
	z-index:2;

}
.change-bg
{
	width: 550px;
	height: 600px;
	transform: translate(-60%,-30%);
}
.change .bar{
	background-color: white;
}
.change #bar1{
	transform: translateY(4px) rotateZ(-45deg);
}
.change #bar3{
	transform: translateY(-6px) rotate(45deg);
}
.change #bar2{
	opacity: 0;
}
.change{
	display: block;
} 
</style>
<div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>

			</div>
			<ul class="nav" id="nav">
				<li><a href="projeto_parte2.php">Home</a></li>
				<li><a href="cadastro_usuario.php" value='<?php echo $id?>'>Usuario</a></li>
        <li><a href="cadastro_conta.php" value='<?php echo $id?>'>Cadastrado Conta</a></li>
				<li><a href="lista_registro.php" value='<?php echo $id?>'>Alterar</a></li>
				<!-- <li><a href="lista_registro.php" value='<?php echo $id?>'>Excluir</a></li> -->
				<li><a href="sair.php">Sair</a></li>

			</ul>

		</div>
		<div class="menu-bg" id="menu-bg"></div>
		<script src="script.js"></script>
    <script>
      
      function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("nav").classList.toggle("change");
	document.getElementById("menu-bg").classList.toggle("change-bg")
}
    </script>
</body>

</html>