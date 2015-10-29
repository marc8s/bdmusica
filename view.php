<?php
$id = $_GET['id'];
include_once("connect.php");
//Executa consulta
$result = $conexao->query("SELECT * FROM musicanaescola WHERE identificador = '$id' LIMIT 1"); 
$row = $result->fetch_object();

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
			<h3 class="page-header">Visualizar Item</h3>
			<div class="row">
				<div class="col-md-4">
					<p><strong>Identificador</strong></p>
					<p><?php echo $row->Identificador; ?></p> <!--valor que for recuperado da base de dados - usar backend ou algum script para trazer essas informações-->
				</div>
				<div class="col-md-4">
					<p><strong>Escola</strong></p>
					<p><?php echo $row->Escola; ?></p>
				</div>
				<div class="col-md-4">
					<p><strong>Cidade</strong></p>
					<p><?php echo $row->Cidade; ?></p>
				</div>
			</div> <!-- .row -->
			<div class="row">
				<div class="col-md-4">
					<p><strong>Telefone</strong></p>
					<p><?php echo $row->Telefone; ?></p> <!--valor que for recuperado da base de dados - usar backend ou algum script para trazer essas informações-->
				</div>				
			</div> <!-- .row -->
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
					<a href="index.php" class="btn btn-success">Voltar</a>
					<a href="edit.php?id=<?php echo $row->Identificador; ?>" class="btn btn-primary">Editar</a>					
					<a class="btn btn-danger"  href="del.php?id=<?php echo $row->Identificador; ?>">Excluir</a>
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>