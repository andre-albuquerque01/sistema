<!DOCTYPE html>
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
    <link rel="stylesheet" href="style.css">
</head> 

<body>
<?php
include_once 'logado.php';
session_start();
$id = $_SESSION['sessao_id'];
?>
  <div id="corpo">
      <div id="caixa" class="btn btn-outline-dark">
      <a href="cadastro_saldo.php">
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
      <a href="alterar_extrato.php">
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
      <a href="metas.php">
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
				<li><a href="cadastro_usuario.php">Usuario</a></li>
				<li><a href="lista_registro.php">Alterar</a></li>
				<li><a href="zerar_saldo.php">Zerar saldo</a></li>
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