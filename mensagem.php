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
						<li><a href="#">Opções</a></li>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
		<br><br><br>
			<p class="text-center text-success">	
			<?php	
			if(isset($_SESSION['update'])){
				echo $_SESSION['update'] ;
				unset($_SESSION['update']);
			}
			?>
			</p>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php } ?>