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
			<form method="post" action="insert3.php"> <!--action diz respeito ao fluxo da página, substituir depois o index.html pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-9">
						<label>10) O quadro abaixo refere-se aos recursos tecnológicos utilizados nas aulas do componente curricular Arte. Você deve responder às três perguntas relacionadas a cada um dos materiais. </label>
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
								<td class="text-center">Computadores (Laboratório de Informática)</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_1a" id="q10_1a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_1a" id="q10_1a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_1b" id="q10_1b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_1b" id="q10_1b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_1b" id="q10_1b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									NÃO SE APLICA
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Conexão de Internet sem fio</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_2a" id="q10_2a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_2a" id="q10_2a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_2b" id="q10_2b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_2b" id="q10_2b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_2b" id="q10_2b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_2c" id="q10_2c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_2c" id="q10_2c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Conexão de Internet via cabo</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_3a" id="q10_3a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_3a" id="q10_3a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_3b" id="q10_3b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_3b" id="q10_3b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_3b" id="q10_3b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									NÃO SE APLICA
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Microfone de computador</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_4a" id="q10_4a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_4a" id="q10_4a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_4b" id="q10_4b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_4b" id="q10_4b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_4b" id="q10_4b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_4c" id="q10_4c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_4c" id="q10_4c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Microfone profissional</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_5a" id="q10_5a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_5a" id="q10_5a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_5b" id="q10_5b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_5b" id="q10_5b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_5b" id="q10_5b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_5c" id="q10_5c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_5c" id="q10_5c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Caixas de som para computadores</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_6a" id="q10_6a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_6a" id="q10_6a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_6b" id="q10_6b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_6b" id="q10_6b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_6b" id="q10_6b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_6c" id="q10_6c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_6c" id="q10_6c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Caixas de som amplificadas</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_7a" id="q10_7a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_7a" id="q10_7a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_7b" id="q10_7b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_7b" id="q10_7b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_7b" id="q10_7b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_7c" id="q10_7c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_7c" id="q10_7c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Micro System/Mini System</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_8a" id="q10_8a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_8a" id="q10_8a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_8b" id="q10_8b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_8b" id="q10_8b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_8b" id="q10_8b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_8c" id="q10_8c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_8c" id="q10_8c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Tablet(s)</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_9a" id="q10_9a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_9a" id="q10_9a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_9b" id="q10_9b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_9b" id="q10_9b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_9b" id="q10_9b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_9c" id="q10_9c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_9c" id="q10_9c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Notebook(s)</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_10a" id="q10_10a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_10a" id="q10_10a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_10b" id="q10_10b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_10b" id="q10_10b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_10b" id="q10_10b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_10c" id="q10_10c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_10c" id="q10_10c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Mesa de Som</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_11a" id="q10_11a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_11a" id="q10_11a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_11b" id="q10_11b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_11b" id="q10_11b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_11b" id="q10_11b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_11c" id="q10_11c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_11c" id="q10_11c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Data show</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_12a" id="q10_12a" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_12a" id="q10_12a" value="Não">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_12b" id="q10_12b" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_12b" id="q10_12b" value="Não">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_12b" id="q10_12b" value="Não sei responder">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="q10_12c" id="q10_12c" value="Sim">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="q10_12c" id="q10_12c" value="Não">Não</label>
									</div>
								</td>
							</tr>
							

						  </tbody>
						</table>  
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label>Complemente, caso seja necessários, com outros materiais não citados no quadro acima:</label>
					   <input type="text" class="form-control" name="q10_complemento" id="q10_complemento">
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