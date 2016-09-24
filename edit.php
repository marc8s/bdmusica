<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	$id = $_GET['id'];
	include_once("connect.php");
	//Executa consulta
	$result = $conexao->query("SELECT * FROM questionario WHERE id = '$id' LIMIT 1"); 
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
						<li><a href="administrador.php">Início</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="login.php">Sair</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
			<h3 class="page-header">Editar Item</h3>
			<form method="post" action="update.php"> 
				<!-- area de campos do form -->
				<div class="row">
					<div class="form-group col-md-6">
					   <label >Escola</label>
					   <input type="text" class="form-control" name="campo1" id="campo1" value="<?php echo $row->escola; ?>">			    
					</div>	
					<div class="form-group col-md-3">
					   <label>Data</label>					   
					   <input type="text" class="form-control" name="campo2" id="campo2" value="<?php echo $row->data; ?>">
					</div>				 
					<div class="form-group col-md-3">
					   <label >Cidade</label>
					   <div class="radio">
						  <label>						  	
						  	<input name="campo3" type="radio" id="campo3" value="Feira de Santana" <?php if($row->cidade == "Feira de Santana"){echo "checked=\'checked\'";} ?> />Feira de Santana
						  </label>
						</div>
						<label>						  	
						  	<input name="campo3" type="radio" id="campo3" value="Sobral" <?php if($row->cidade == "Sobral"){echo "checked=\'checked\'";} ?> />Sobral
						  </label>
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >1) Você ministra o componente curricular Arte na escola onde você atua? </label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q1" type="radio" id="q1" value="Sim" <?php if($row->q1 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q1" type="radio" id="q1" value="Não" <?php if($row->q1 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>2) Nas suas aulas de Arte, predomina o trabalho com qual(is) modalidade(s) artística(s)? Você pode marcar mais de uma opção.</label>
						<?php 
							$q2 = explode(",",$row->q2); //aqui tu usa o separador ",", que a cada virgula que ele encontra a função explode separa a variavel 
							$musica = false;
							$teatro = false;
							$artes = false;
							$danca = false;
							$outros = false;
							foreach ($q2 as $q2_resposta) 
							{								
								if($q2_resposta == 'Música'){
									$musica = true;
								}else{
									if($q2_resposta == 'Teatro' ){
										$teatro = true;
									}else{
										if($q2_resposta == 'Artes Visuais'){
											$artes = true;
										}else{
											if($q2_resposta == 'Dança'){ 
												$danca = true;
											}else{
												if($q2_resposta == 'Outros'){
													$outros = true;
												}
											}
										}
									}
								}
								
							}							
							
						?>
						<div class="checkbox">
							<label><input type="checkbox" name="q2[]" id="q2" value="Música" <?php if($musica == true){ echo "checked=\'checked\'"; } ?>>Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2[]" id="q2" value="Teatro" <?php if($teatro == true){ echo "checked=\'checked\'"; } ?>>Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2[]" id="q2" value="Artes Visuais" <?php if($artes == true){ echo "checked=\'checked\'"; } ?>>Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" name="q2[]" id="q2" value="Dança" <?php if($danca == true){ echo "checked=\'checked\'"; } ?>>Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q2[]" id="q2" value="Outros" <?php if($outros == true){ echo "checked=\'checked\'"; } ?>>Outros</label>
						     <input type="text" class="form-control" name="q2_outros" id="q2_outros" value="<?php echo $row->q2_outros; ?>">
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >3) Você trabalha com Música em suas aulas de Arte? </label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q3" type="radio" id="q3" value="Sim" <?php if($row->q3 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q3" type="radio" id="q3" value="Não" <?php if($row->q3 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label>4) A escola na qual você dá aula oferece a disciplina Música em seu currículo básico?</label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q4" type="radio" id="q4" value="Sim" <?php if($row->q4 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q4" type="radio" id="q4" value="Não" <?php if($row->q4 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5) Você possui formação superior (licenciatura ou bacharelado) em alguma modalidade artística? </label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q5" type="radio" id="q5" value="Sim" <?php if($row->q5 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q5" type="radio" id="q5" value="Não" <?php if($row->q5 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5.1) Se respondeu "Sim" para a questão anterior, especifique:</label>
					   <?php 
							$q5_1 = explode(",",$row->q5_1); //aqui tu usa o separador ",", que a cada virgula que ele encontra a função explode separa a variavel 
							$licenciatura = false;
							$bacharelado = false;							
							foreach ($q5_1 as $q5_1_resposta) 
							{								
								if($q5_1_resposta == 'Licenciatura'){
									$licenciatura = true;
								}else{
									if($q5_1_resposta == 'Bacharelado' ){
										$bacharelado = true;
									}
								}
								
							}							
							
						?>						
					   <div class="checkbox">
							<label><input type="checkbox" name="q5_1[]" id="q5_1" value="Licenciatura" <?php if($licenciatura == true){ echo "checked=\'checked\'"; } ?>>Licenciatura</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_1[]" id="q5_1" value="Bacharelado" <?php if($bacharelado == true){ echo "checked=\'checked\'"; } ?>>Bacharelado</label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>5.2) Em que modalidade artística?</label>
						<?php 
							$q5_2 = explode(",",$row->q5_2); //aqui tu usa o separador ",", que a cada virgula que ele encontra a função explode separa a variavel 
							$musica = false;
							$teatro = false;
							$artes = false;
							$danca = false;
							$outros = false;
							foreach ($q5_2 as $q5_2_resposta) 
							{								
								if($q5_2_resposta == 'Música'){
									$musica = true;
								}else{
									if($q5_2_resposta == 'Teatro' ){
										$teatro = true;
									}else{
										if($q5_2_resposta == 'Artes Visuais'){
											$artes = true;
										}else{
											if($q5_2_resposta == 'Dança'){ 
												$danca = true;
											}else{
												if($q5_2_resposta == 'Outros'){
													$outros = true;
												}
											}
										}
									}
								}
								
							}							
							
						?>
						<div class="checkbox">
							<label><input type="checkbox" name="q5_2[]" id="q5_2" value="Música" <?php if($musica == true){ echo "checked=\'checked\'"; } ?>>Música</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2[]" id="q5_2" value="Teatro" <?php if($teatro == true){ echo "checked=\'checked\'"; } ?>>Teatro</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2[]" id="q5_2" value="Artes Visuais" <?php if($artes == true){ echo "checked=\'checked\'"; } ?>>Artes Visuais</label>
						</div>	
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2[]" id="q5_2" value="Dança" <?php if($danca == true){ echo "checked=\'checked\'"; } ?>>Dança</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" name="q5_2[]" id="q5_2" value="Outros" <?php if($outros == true){ echo "checked=\'checked\'"; } ?>>Outros</label>
						     <input type="text" class="form-control" name="q5_2_outros" id="q5_2_outros" value="<?php echo $row->q5_2_outros; ?>">
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>6) Você possui algum tipo de formação (exceto formação de nível superior) em alguma modalidade artística (Música, Teatro, Artes Visuais ou Dança)?</label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q6" type="radio" id="q6" value="Sim" <?php if($row->q6 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q6" type="radio" id="q6" value="Não" <?php if($row->q6 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label>6.1) Se respondeu "Sim" para a questão anterior, especifique (são considerados quaisquer tipos de cursos livres, aulas particulares, cursos de extensão, cursos de formação e etc., em qualquer modalidade artística): </label>
					   <input type="text" class="form-control" name="q6_1" id="q6_1" value="<?php echo $row->q6_1; ?>">					   
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>7) Na sua escola, existe algum tipo de atividade extracurricular (contraturno) na escola voltada para música?</label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q7" type="radio" id="q7" value="Sim" <?php if($row->q7 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q7" type="radio" id="q7" value="Não" <?php if($row->q7 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.1) Quais atividades são desenvolvidas? </label>
					   <input type="text" class="form-control" name="q7_1" id="q7_1" value="<?php echo $row->q7_1; ?>">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.2) Você sabe como esta atividade é financiada?</label>
					   <input type="text" class="form-control" name="q7_2" id="q7_2" value="<?php echo $row->q7_2; ?>">
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >8) A escola possui materiais e/ou equipamentos específicos para a utilização nas aulas de Arte?</label>
					   <div class="radio">						  
						  <label>						  	
						  	<input name="q8" type="radio" id="q8" value="Sim" <?php if($row->q8 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
						  </label>
						</div>
						<div class="radio">
						  <label>						  	
						  	<input name="q8" type="radio" id="q8" value="Não" <?php if($row->q8 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  </label>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >8.1) Se "Sim", especifique os materiais e/ou equipamentos disponíveis. </label>
					   <input type="text" class="form-control" name="q8_1" id="q8_1" value="<?php echo $row->q8_1; ?>">
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
										<label>						  	
									  		<input name="q9_1a" type="radio" id="q9_1a" value="Sim" <?php if($row->q9_1a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_1a" type="radio" id="q9_1a" value="Não" <?php if($row->q9_1a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_1b" type="radio" id="q9_1b" value="Sim" <?php if($row->q9_1b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_1b" type="radio" id="q9_1b" value="Não" <?php if($row->q9_1b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_1b" id="q9_1b" value="Não sei responder" <?php if($row->q9_1b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_1c" type="radio" id="q9_1c" value="Sim" <?php if($row->q9_1c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_1c" type="radio" id="q9_1c" value="Não" <?php if($row->q9_1c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Violão</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_2a" type="radio" id="q9_2a" value="Sim" <?php if($row->q9_2a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_2a" type="radio" id="q9_2a" value="Não" <?php if($row->q9_2a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_2b" type="radio" id="q9_2b" value="Sim" <?php if($row->q9_2b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_2b" type="radio" id="q9_2b" value="Não" <?php if($row->q9_2b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_2b" id="q9_2b" value="Não sei responder" <?php if($row->q9_2b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_2c" type="radio" id="q9_2c" value="Sim" <?php if($row->q9_2c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_2c" type="radio" id="q9_2c" value="Não" <?php if($row->q9_2c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Percussão</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_3a" type="radio" id="q9_3a" value="Sim" <?php if($row->q9_3a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_3a" type="radio" id="q9_3a" value="Não" <?php if($row->q9_3a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_3b" type="radio" id="q9_3b" value="Sim" <?php if($row->q9_3b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_3b" type="radio" id="q9_3b" value="Não" <?php if($row->q9_3b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_3b" id="q9_3b" value="Não sei responder" <?php if($row->q9_3b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_3c" type="radio" id="q9_3c" value="Sim" <?php if($row->q9_3c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_3c" type="radio" id="q9_3c" value="Não" <?php if($row->q9_3c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Teclado</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_4a" type="radio" id="q9_4a" value="Sim" <?php if($row->q9_4a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_4a" type="radio" id="q9_4a" value="Não" <?php if($row->q9_4a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_4b" type="radio" id="q9_4b" value="Sim" <?php if($row->q9_4b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_4b" type="radio" id="q9_4b" value="Não" <?php if($row->q9_4b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_4b" id="q9_4b" value="Não sei responder" <?php if($row->q9_4b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_4c" type="radio" id="q9_4c" value="Sim" <?php if($row->q9_4c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_4c" type="radio" id="q9_4c" value="Não" <?php if($row->q9_4c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Banda de Música/Banda de Fanfarra</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_5a" type="radio" id="q9_5a" value="Sim" <?php if($row->q9_5a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_5a" type="radio" id="q9_5a" value="Não" <?php if($row->q9_5a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_5b" type="radio" id="q9_5b" value="Sim" <?php if($row->q9_5b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_5b" type="radio" id="q9_5b" value="Não" <?php if($row->q9_5b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_5b" id="q9_5b" value="Não sei responder" <?php if($row->q9_5b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_5c" type="radio" id="q9_5c" value="Sim" <?php if($row->q9_5c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_5c" type="radio" id="q9_5c" value="Não" <?php if($row->q9_5c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Livros Didáticos</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_6a" type="radio" id="q9_6a" value="Sim" <?php if($row->q9_6a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_6a" type="radio" id="q9_6a" value="Não" <?php if($row->q9_6a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_6b" type="radio" id="q9_6b" value="Sim" <?php if($row->q9_6b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_6b" type="radio" id="q9_6b" value="Não" <?php if($row->q9_6b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q9_6b" id="q9_6b" value="Não sei responder" <?php if($row->q9_6b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q9_6c" type="radio" id="q9_6c" value="Sim" <?php if($row->q9_6c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q9_6c" type="radio" id="q9_6c" value="Não" <?php if($row->q9_6c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
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
					   <input type="text" class="form-control" name="q9_complemento" id="q9_complemento" value="<?php echo $row->q9_complemento; ?>">
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
										<label>						  	
									  		<input name="q10_1a" type="radio" id="q10_1a" value="Sim" <?php if($row->q10_1a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_1a" type="radio" id="q10_1a" value="Não" <?php if($row->q10_1a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_1b" type="radio" id="q10_1b" value="Sim" <?php if($row->q10_1b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_1b" type="radio" id="q10_1b" value="Não" <?php if($row->q10_1b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_1b" id="q10_1b" value="Não sei responder" <?php if($row->q10_1b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
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
										<label>						  	
									  		<input name="q10_2a" type="radio" id="q10_2a" value="Sim" <?php if($row->q10_2a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_2a" type="radio" id="q10_2a" value="Não" <?php if($row->q10_2a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_2b" type="radio" id="q10_2b" value="Sim" <?php if($row->q10_2b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_2b" type="radio" id="q10_2b" value="Não" <?php if($row->q10_2b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_2b" id="q10_2b" value="Não sei responder" <?php if($row->q10_2b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_2c" type="radio" id="q10_2c" value="Sim" <?php if($row->q10_2c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_2c" type="radio" id="q10_2c" value="Não" <?php if($row->q10_2c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Conexão de Internet via cabo</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_3a" type="radio" id="q10_3a" value="Sim" <?php if($row->q10_3a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_3a" type="radio" id="q10_3a" value="Não" <?php if($row->q10_3a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_3b" type="radio" id="q10_3b" value="Sim" <?php if($row->q10_3b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_3b" type="radio" id="q10_3b" value="Não" <?php if($row->q10_3b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_3b" id="q10_3b" value="Não sei responder" <?php if($row->q10_3b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
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
										<label>						  	
									  		<input name="q10_4a" type="radio" id="q10_4a" value="Sim" <?php if($row->q10_4a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_4a" type="radio" id="q10_4a" value="Não" <?php if($row->q10_4a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_4b" type="radio" id="q10_4b" value="Sim" <?php if($row->q10_4b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_4b" type="radio" id="q10_4b" value="Não" <?php if($row->q10_4b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_4b" id="q10_4b" value="Não sei responder" <?php if($row->q10_4b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_4c" type="radio" id="q10_4c" value="Sim" <?php if($row->q10_4c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_4c" type="radio" id="q10_4c" value="Não" <?php if($row->q10_4c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Microfone profissional</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_5a" type="radio" id="q10_5a" value="Sim" <?php if($row->q10_5a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_5a" type="radio" id="q10_5a" value="Não" <?php if($row->q10_5a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_5b" type="radio" id="q10_5b" value="Sim" <?php if($row->q10_5b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_5b" type="radio" id="q10_5b" value="Não" <?php if($row->q10_5b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_5b" id="q10_5b" value="Não sei responder" <?php if($row->q10_5b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_5c" type="radio" id="q10_5c" value="Sim" <?php if($row->q10_5c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_5c" type="radio" id="q10_5c" value="Não" <?php if($row->q10_5c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Caixas de som para computadores</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_6a" type="radio" id="q10_6a" value="Sim" <?php if($row->q10_6a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_6a" type="radio" id="q10_6a" value="Não" <?php if($row->q10_6a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_6b" type="radio" id="q10_6b" value="Sim" <?php if($row->q10_6b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_6b" type="radio" id="q10_6b" value="Não" <?php if($row->q10_6b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_6b" id="q10_6b" value="Não sei responder" <?php if($row->q10_6b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_6c" type="radio" id="q10_6c" value="Sim" <?php if($row->q10_6c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_6c" type="radio" id="q10_6c" value="Não" <?php if($row->q10_6c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Caixas de som amplificadas</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_7a" type="radio" id="q10_7a" value="Sim" <?php if($row->q10_7a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_7a" type="radio" id="q10_7a" value="Não" <?php if($row->q10_7a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_7b" type="radio" id="q10_7b" value="Sim" <?php if($row->q10_7b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_7b" type="radio" id="q10_7b" value="Não" <?php if($row->q10_7b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_7b" id="q10_7b" value="Não sei responder" <?php if($row->q10_7b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_7c" type="radio" id="q10_7c" value="Sim" <?php if($row->q10_7c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_7c" type="radio" id="q10_7c" value="Não" <?php if($row->q10_7c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Micro System/Mini System</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_8a" type="radio" id="q10_8a" value="Sim" <?php if($row->q10_8a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_8a" type="radio" id="q10_8a" value="Não" <?php if($row->q10_8a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_8b" type="radio" id="q10_8b" value="Sim" <?php if($row->q10_8b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_8b" type="radio" id="q10_8b" value="Não" <?php if($row->q10_8b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_8b" id="q10_8b" value="Não sei responder" <?php if($row->q10_8b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_8c" type="radio" id="q10_8c" value="Sim" <?php if($row->q10_8c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_8c" type="radio" id="q10_8c" value="Não" <?php if($row->q10_8c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Tablet(s)</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_9a" type="radio" id="q10_9a" value="Sim" <?php if($row->q10_9a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_9a" type="radio" id="q10_9a" value="Não" <?php if($row->q10_9a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_9b" type="radio" id="q10_9b" value="Sim" <?php if($row->q10_9b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_9b" type="radio" id="q10_9b" value="Não" <?php if($row->q10_9b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_9b" id="q10_9b" value="Não sei responder" <?php if($row->q10_9b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_9c" type="radio" id="q10_9c" value="Sim" <?php if($row->q10_9c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_9c" type="radio" id="q10_9c" value="Não" <?php if($row->q10_9c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Notebook(s)</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_10a" type="radio" id="q10_10a" value="Sim" <?php if($row->q10_10a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_10a" type="radio" id="q10_10a" value="Não" <?php if($row->q10_10a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_10b" type="radio" id="q10_10b" value="Sim" <?php if($row->q10_10b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_10b" type="radio" id="q10_10b" value="Não" <?php if($row->q10_10b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_10b" id="q10_10b" value="Não sei responder" <?php if($row->q10_10b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_10c" type="radio" id="q10_10c" value="Sim" <?php if($row->q10_10c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_10c" type="radio" id="q10_10c" value="Não" <?php if($row->q10_10c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Mesa de Som</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_11a" type="radio" id="q10_11a" value="Sim" <?php if($row->q10_11a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_11a" type="radio" id="q10_11a" value="Não" <?php if($row->q10_11a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_11b" type="radio" id="q10_11b" value="Sim" <?php if($row->q10_11b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_11b" type="radio" id="q10_11b" value="Não" <?php if($row->q10_11b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_11b" id="q10_11b" value="Não sei responder" <?php if($row->q10_11b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_11c" type="radio" id="q10_11c" value="Sim" <?php if($row->q10_11c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_11c" type="radio" id="q10_11c" value="Não" <?php if($row->q10_11c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Data show</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_12a" type="radio" id="q10_12a" value="Sim" <?php if($row->q10_12a == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_12a" type="radio" id="q10_12a" value="Não" <?php if($row->q10_12a == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_12b" type="radio" id="q10_12b" value="Sim" <?php if($row->q10_12b == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_12b" type="radio" id="q10_12b" value="Não" <?php if($row->q10_12b == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
									</div>
									<div class="radio">
										<label>
									  		<input type="radio" name="q10_12b" id="q10_12b" value="Não sei responder" <?php if($row->q10_12b == "Não sei responder"){echo "checked=\'checked\'";} ?>>Não sei responder
									    </label>
									</div>
								</td>
								<td class="text-center">
									<div class="radio">	
										<label>						  	
									  		<input name="q10_12c" type="radio" id="q10_12c" value="Sim" <?php if($row->q10_12c == "Sim"){echo "checked=\'checked\'";} ?> />Sim
									  	</label>
									</div>
									<div class="radio">
										<label>						  	
									  		<input name="q10_12c" type="radio" id="q10_12c" value="Não" <?php if($row->q10_12c == "Não"){echo "checked=\'checked\'";} ?> />Não
									  	</label>
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
					   <input type="text" class="form-control" name="q10_complemento" id="q10_complemento" value="<?php echo $row->q10_complemento; ?>">
					</div>					
				</div>

				<div class="row">
					<div class="form-group col-md-12">
					   <label>11) O projeto pedagógico da escola prevê a abordagem de conteúdos referentes às raízes afro-brasileiras e indígenas em sala de aula?</label>
					  <div class="radio">	
						   	<label>						  	
								<input name="q11" type="radio" id="q11" value="Sim" <?php if($row->q11 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
							</label>
					   </div>
					   <div class="radio">
							<label>						  	
						  		<input name="q11" type="radio" id="q11" value="Não" <?php if($row->q11 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  	</label>
					    </div>
					    <div class="radio">
							<label>						  	
						  		<input name="q11" type="radio" id="q11" value="Não sei responder" <?php if($row->q11 == "Não"){echo "checked=\'checked\'";} ?> />Não sei responder
						  	</label>
					    </div>						
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >11.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">	
						   	<label>						  	
								<input name="q11_1" type="radio" id="q11_1" value="Sim" <?php if($row->q11_1 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
							</label>
					   </div>
					   <div class="radio">
							<label>						  	
						  		<input name="q11_1" type="radio" id="q11_1" value="Não" <?php if($row->q11_1 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  	</label>
					    </div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12) Nas aulas de Arte ministradas por você, são abordados conteúdos referentes às raízes afro-brasileiras e indígenas? </label>
					   <div class="radio">	
						   	<label>						  	
								<input name="q12" type="radio" id="q12" value="Sim" <?php if($row->q12 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
							</label>
					   </div>
					   <div class="radio">
							<label>						  	
						  		<input name="q12" type="radio" id="q12" value="Não" <?php if($row->q12 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  	</label>
					    </div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <div class="radio">	
						   	<label>						  	
								<input name="q12_1" type="radio" id="q12_1" value="Sim" <?php if($row->q12_1 == "Sim"){echo "checked=\'checked\'";} ?> />Sim
							</label>
					   </div>
					   <div class="radio">
							<label>						  	
						  		<input name="q12_1" type="radio" id="q12_1" value="Não" <?php if($row->q12_1 == "Não"){echo "checked=\'checked\'";} ?> />Não
						  	</label>
					    </div>
					</div>					
				</div>
				<hr />
				<div id="actions" class="row">
					<div class="col-md-12">
						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
						<button type="submit" class="btn btn-primary">Salvar </button>
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