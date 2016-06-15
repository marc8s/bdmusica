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
					   <label >Escola</label>
					   <input type="text" class="form-control" name="campo1" id="campo1">
					</div>	
					<div class="form-group col-md-3">
					   <label>Data</label>
					   <input type="number" class="form-control" name="campo2" id="campo2">
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