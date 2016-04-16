<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Adicionar Escola</title>		 
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
						<li><a href="administrador.php">Início</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="login.php">Sair</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
			<h3 class="page-header">Adicionar Item</h3>
			<form method="post" action="insert.php"> <!--action diz respeito ao fluxo da página, substituir depois o index.html pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-4">
					   <label for="campo1">Escola</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					 
					<div class="form-group col-md-4">
					   <label for="campo2">Cidade</label>
					   <input type="text" class="form-control" name="campo2" id="campo2">
					</div>
					<!-- <div class="form-group col-md-4">
					   <label for="campo3">Identificador</label>
					   <input type="number" class="form-control" name="campo3" id="campo3">
					</div>-->
				</div>
				<div class="row">
					<div class="form-group col-md-4">
					   <label for="campo4">Telefone</label>
					   <input type="number" class="form-control" name="campo4" id="campo4">
					</div>	 
					
				</div>
				<hr />
				<div id="actions" class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Salvar</button>
						<a href="administrador.php" class="btn btn-default">Cancelar</a>
					</div>
				</div>				
			</form>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php } ?>