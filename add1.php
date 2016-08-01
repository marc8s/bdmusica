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
			<form method="post" action="insertquestionario.php"> <!--action diz respeito ao fluxo da página, substituir depois o index.html pelo correto provavelmente um script de back-end-->
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-6">
					   <label >Escola</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>	
					<div class="form-group col-md-3">
					   <label>Data</label>
					   <input type="text" class="form-control" name="campo2" id="campo2">
					</div>				 
					<div class="form-group col-md-3">
					   <label >Cidade</label>
					   <div class="radio">
						  <label><input type="radio" name="campo3" id="campo3" value="Feira de Santana">Feira de Santana</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo3" id="campo3" value="Sobral">Sobral</label>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >1) Você ministra o componente curricular Arte na escola onde você atua? </label>
					   <div class="radio">
						  <label><input type="radio" name="q1" id="q1" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q1" id="q1" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>2) Nas suas aulas de Arte, predomina o trabalho com qual(is) modalidade(s) artística(s)? Você pode marcar mais de uma opção.</label>
						<div class="checkbox">
							<label><input type="checkbox" name="q2" id="q2" value="Música">Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2" id="q2" value="Teatro">Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2" id="q2" value="Artes Visuais">Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" name="q2" id="q2" value="Dança">Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2" id="q2" value="Outros">Outros</label>
						     <input type="text" class="form-control" name="q2_outros" id="q2_outros">
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >3) Você trabalha com Música em suas aulas de Arte? </label>
					   <div class="radio">
						  <label><input type="radio" name="q3" id="q3" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q3" id="q3" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label>4) A escola na qual você dá aula oferece a disciplina Música em seu currículo básico?</label>
					   <div class="radio">
						  <label><input type="radio" name="q4" id="q4" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q4" id="q4" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5) Você possui formação superior (licenciatura ou bacharelado) em alguma modalidade artística? </label>
					   <div class="radio">
						  <label><input type="radio" name="q5" id="q5" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q5" id="q5" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5.1) Se respondeu "Sim" para a questão anterior, especifique:</label>
					   <div class="checkbox">
							<label><input type="checkbox" name="q5_1" id="q5_1" value="Licenciatura">Licenciatura</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_1" id="q5_1" value="Bacharelado">Bacharelado</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>5.2) Em que modalidade artística?</label>
						<div class="checkbox">
							<label><input type="checkbox" name="q5_2" id="q5_2" value="Música">Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2" id="q5_2" value="Teatro">Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2" id="q5_2" value="Artes Visuais">Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2" id="q5_2" value="Dança">Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2" id="q5_2" value="Outros">Outros</label>
						     <input type="text" class="form-control" name="q5_2_outros" id="q5_2_outros">
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>6) Você possui algum tipo de formação (exceto formação de nível superior) em alguma modalidade artística (Música, Teatro, Artes Visuais ou Dança)?</label>
					   <div class="radio">
						  <label><input type="radio" name="q6" id="q6" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q6" id="q6" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label>6.1) Se respondeu "Sim" para a questão anterior, especifique (são considerados quaisquer tipos de cursos livres, aulas particulares, cursos de extensão, cursos de formação e etc., em qualquer modalidade artística): </label>
					   <input type="text" class="form-control" name="q6_1" id="q6_1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>7) Na sua escola, existe algum tipo de atividade extracurricular (contraturno) na escola voltada para música?</label>
					   <div class="radio">
						  <label><input type="radio" name="q7" id="q7" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q7" id="q7" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.1) Quais atividades são desenvolvidas? </label>
					   <input type="text" class="form-control" name="q7_1" id="q7_1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.2) Você sabe como esta atividade é financiada?</label>
					   <input type="text" class="form-control" name="q7_2" id="q7_2">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >8) A escola possui materiais e/ou equipamentos específicos para a utilização nas aulas de Arte?</label>
					   <div class="radio">
						  <label><input type="radio" name="q8" id="q8" value="Sim">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="q8" id="q8" value="Não">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >8.1) Se "Sim", especifique os materiais e/ou equipamentos disponíveis. </label>
					   <input type="text" class="form-control" name="q8_1" id="q8_1">
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