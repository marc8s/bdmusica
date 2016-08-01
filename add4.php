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
			<h3 class="page-header">Práticas de Ensinar Música </h3>
			<form method="post" action="insert4.php"> <!--action diz respeito ao fluxo da página, substituir depois o index.html pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-12">
					   <label>11) O projeto pedagógico da escola prevê a abordagem de conteúdos referentes às raízes afro-brasileiras e indígenas em sala de aula?</label>
					   <div class="radio">
						  <label><input type="radio" name="q11" id="q11" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q11" id="q11" value="Não">Não</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q11" id="q11" value="Não sei responder">Não sei responder</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >11.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">
						  <label><input type="radio" name="q11_1" id="q11_1" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q11_1" id="q11_1" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12) Nas aulas de Arte ministradas por você, são abordados conteúdos referentes às raízes afro-brasileiras e indígenas? </label>
					   <div class="radio">
						  <label><input type="radio" name="q12" id="q12" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q12" id="q12" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">
						  <label><input type="radio" name="q12_1" id="q12_1" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q12_1" id="q12_1" value="Não">Não</label>
						</div>
					</div>					
				</div>
				
				<hr />
				<div id="actions" class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Finalizar</button>
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