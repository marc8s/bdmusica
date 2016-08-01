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
			<form method="post" action="insert2.php"> <!--action diz respeito ao fluxo da página, substituir depois o index.html pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-9">
						<label>9) O quadro abaixo refere-se aos materiais didáticos relacionados às aulas do componente curricular Arte. Você deve responder às três perguntas relacionadas a cada um dos materiais.</label>
						<table class="table table-responsive">
						  <thead style="background-color: #000000; color: #ffffff">
							<tr>
								<th class="text-center">Material</th>
								<th class="text-center">Utiliza o Material em sala de aula?</th>
								<th class="text-center">A escola disponibiliza este material?</th>
								<th class="text-center">Você traz este material de sua casa?</th>
							</tr>
						  </thead>

						  <tbody >
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Flauta</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_1a" id="q9_1a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_1a" id="q9_1a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_1b" id="q9_1b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_1b" id="q9_1b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_1b" id="q9_1b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_1c" id="q9_1c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_1c" id="q9_1c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Violão</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_2a" id="q9_2a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_2a" id="q9_2a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_2b" id="q9_2b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_2b" id="q9_2b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_2b" id="q9_2b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_2c" id="q9_2c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_2c" id="q9_2c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Percussão</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_3a" id="q9_3a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_3a" id="q9_3a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_3b" id="q9_3b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_3b" id="q9_3b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_3b" id="q9_3b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_3c" id="q9_3c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_3c" id="q9_3c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Teclado</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_4a" id="q9_4a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_4a" id="q9_4a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_4b" id="q9_4b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_4b" id="q9_4b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_4b" id="q9_4b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_4c" id="q9_4c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_4c" id="q9_4c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Banda de Música/Banda de Fanfarra</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_5a" id="q9_5a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_5a" id="q9_5a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_5b" id="q9_5b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_5b" id="q9_5b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_5b" id="q9_5b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_5c" id="q9_5c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_5c" id="q9_5c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Livros Didáticos</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_6a" id="q9_6a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_6a" id="q9_6a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_6b" id="q9_6b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_6b" id="q9_6b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_6b" id="q9_6b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q9_6c" id="q9_6c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q9_6c" id="q9_6c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							

						  </tbody>
						</table>  
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >Complemente, caso seja necessários, com outros materiais não citados no quadro acima:</label>
					   <input type="text" class="form-control" name="q9_complemento" id="q9_complemento">
					</div>					
				</div>
				<hr />
				<div id="actions" class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Próximo</button>
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