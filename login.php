<?php
session_start();
unset($_SESSION['email']);
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
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
			<h3 class="page-header text-center">Faça Login</h3>
		</div>
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-2">
			  <form class="form-signin" method="POST" action="valida_login.php">
				<!--<h2 class="form-signin-heading">Faça Login</h2>-->
				<label for="inputEmail" class="sr-only">Email</label>
				<input type="email" id="inputEmail" name ="email" class="form-control" placeholder="Email" required autofocus>
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" id="inputPassword" name ="senha" class="form-control" placeholder="Senha" required>
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="remember-me"> Lembre-me
				  </label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			  </form>

			</div> <!-- /container -->
		</div>
	<p class="text-center text-danger">	
		<?php	
		if(isset($_SESSION['loginErro'])){
			echo $_SESSION['loginErro'] ;
			unset($_SESSION['loginErro']);
		}
		?>
	</p>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>