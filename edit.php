<?php
$id = $_GET['id'];
include_once("connect.php");
//Execulta consulta
$result = $conexao->query("SELECT * FROM musicanaescola WHERE identificador = '$id' LIMIT 1"); 
$row = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Editar item</title>		 
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
			<h3 class="page-header">Editar Item</h3>
			<form method="post" action="update.php"> <!--action diz respeito ao fluxo da página, substituir depois pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-4">
					   <label for="campo1">Identificador</label>
					   <input type="text" class="form-control" id="campo1" name="campo1" value="<?php echo $row->Identificador; ?>">
					</div>					 
					<div class="form-group col-md-4">
					   <label for="campo2">Escola</label>
					   <input type="text" class="form-control" id="campo2" name="campo2" value="<?php echo $row->Escola; ?>">
					</div>
					<div class="form-group col-md-4">
					   <label for="campo3">Cidade</label>
					   <input type="text" class="form-control" id="campo3" name="campo3" value="<?php echo $row->Cidade; ?>">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
					   <label for="campo4">Telefone</label>
					   <input type="text" class="form-control" id="campo4" name="campo4" value="<?php echo $row->Telefone; ?>">
					</div>	
				</div>
				<hr />
				<div id="actions" class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Salvar</button>
						<a href="index.php" class="btn btn-default">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>