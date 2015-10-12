<?php
include_once("connect.php");

$escola = $_POST['campo2'];
$cidade = $_POST['campo3'];
$identificador = $_POST['campo1'];
$telefone = $_POST['campo4'];

$sql = "UPDATE musicanaescola set Escola ='$escola', Cidade ='$cidade', Identificador= '$identificador', Telefone='$telefone' WHERE Identificador = $identificador";
//$sql .= "( Escola ='$escola', Cidade ='$cidade', Identificador= '$identificador', Telefone='$telefone')";
$conexao->query($sql);
$conexao->close();
//include("index.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD com Bootstrap 3</title>		 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body> 
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">MÚSICA NA ESCOLA</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Início</a></li>
						<li><a href="#">Opções</a></li>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
			<h3 class="page-header">Cadastro alterado com sucesso.</h3>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
