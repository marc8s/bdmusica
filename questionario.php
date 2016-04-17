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
			<form method="post" action="insert.php"> 
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-6">
					   <label for="campo1">Escola</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>	
					<div class="form-group col-md-3">
					   <label for="campo2">Data</label>
					   <input type="number" class="form-control" name="campo2" id="campo2">
					</div>				 
					<div class="form-group col-md-3">
					   <label for="campo3">Cidade</label>
					   <div class="radio">
						  <label><input type="radio" name="campo3" id="campo3">Feira de Santana</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo3" id="campo3">Sobral</label>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label for="campo4">1) Você ministra o componente curricular Arte na escola onde você atua? </label>
					   <div class="radio">
						  <label><input type="radio" name="campo4" id="campo4">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo4" id="campo4">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label for="campo5">2) Nas suas aulas de Arte, predomina o trabalho com qual(is) modalidade(s) artística(s)? Você pode marcar mais de uma opção.</label>
						<div class="checkbox">
							<label><input type="checkbox" value="">Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" value="">Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Outros</label>
						     <input type="text" class="form-control" name="campo1" id="campo1">
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label for="campo6">3) Você trabalha com Música em suas aulas de Arte? </label>
					   <div class="radio">
						  <label><input type="radio" name="campo6" id="campo6">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo6" id="campo6">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label for="campo7">4) A escola na qual você dá aula oferece a disciplina Música em seu currículo básico?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo7" id="campo7">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo7" id="campo7">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label for="campo8">5) Você possui formação superior (licenciatura ou bacharelado) em alguma modalidade artística? </label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label for="campo9">5.1) Se respondeu "Sim" para a questão anterior, especifique:</label>
					   <div class="checkbox">
							<label><input type="checkbox" value="">Licenciatura</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Bacharelado</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label for="campo10">5.2) Em que modalidade artística?</label>
						<div class="checkbox">
							<label><input type="checkbox" value="">Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" value="">Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="">Outros</label>
						     <input type="text" class="form-control" name="campo1" id="campo1">
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo11">6) Você possui algum tipo de formação (exceto formação de nível superior) em alguma modalidade artística (Música, Teatro, Artes Visuais ou Dança)?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo12">6.1) Se respondeu "Sim" para a questão anterior, especifique (são considerados quaisquer tipos de cursos livres, aulas particulares, cursos de extensão, cursos de formação e etc., em qualquer modalidade artística): </label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo13">7) Na sua escola, existe algum tipo de atividade extracurricular (contraturno) na escola voltada para música?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo14">7.1) Quais atividades são desenvolvidas? </label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo15">7.2) Você sabe como esta atividade é financiada?</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo16">8) A escola possui materiais e/ou equipamentos específicos para a utilização nas aulas de Arte?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo17">8.1) Se "Sim", especifique os materiais e/ou equipamentos disponíveis. </label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label for="campo18">9) O quadro abaixo refere-se aos materiais didáticos relacionados às aulas do componente curricular Arte. Você deve responder às três perguntas relacionadas a cada um dos materiais.</label>
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
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Violão</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Percussão</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Teclado</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Banda de Música/Banda de Fanfarra</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Livros Didáticos</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							

						  </tbody>
						</table>  
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo19">Complemente, caso seja necessários, com outros materiais não citados no quadro acima:</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>

				<div class="row">
					<div class="form-group col-md-9">
						<label for="campo20">10) O quadro abaixo refere-se aos recursos tecnológicos utilizados nas aulas do componente curricular Arte. Você deve responder às três perguntas relacionadas a cada um dos materiais. </label>
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
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
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
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Conexão de Internet via cabo</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
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
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Microfone profissional</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Caixas de som para computadores</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Caixas de som amplificadas</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Micro System/Mini System</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Tablet(s)</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Notebook(s)</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Mesa de Som</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Data show</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Sim</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="campo8" id="campo8">Não</label>
									</div>
								</td>
							</tr>
							

						  </tbody>
						</table>  
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label for="campo21">Complemente, caso seja necessários, com outros materiais não citados no quadro acima:</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>					
				</div>

				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo22">11) O projeto pedagógico da escola prevê a abordagem de conteúdos referentes às raízes afro-brasileiras e indígenas em sala de aula?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não sei responder</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo23">11.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo24">12) Nas aulas de Arte ministradas por você, são abordados conteúdos referentes às raízes afro-brasileiras e indígenas? </label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label for="campo25">12.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Sim</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="campo8" id="campo8">Não</label>
						</div>
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