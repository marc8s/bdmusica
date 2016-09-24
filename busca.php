<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	$escola = $_POST['search'];
	include_once("connect.php");
	//Executa consulta
	$result = $conexao->query("SELECT * FROM questionario WHERE escola = '$escola' LIMIT 1"); 
	$linhas = $result->num_rows;

	if($linhas == 0){
		$_SESSION['update'] = "Cadastro não encontrado!";
		$url = 'administrador.php';
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	}else{
		$row = $result->fetch_object(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Música na Escola</title>		 
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
			<h3 class="page-header">Visualizar Item</h3>
			<div class="row">
					<div class="form-group col-md-6">
					   <label >Escola</label>
					   <p><?php echo $row->escola; ?></p>
					</div>	
					<div class="form-group col-md-3">
					   <label>Data</label>					   
					   <p><?php echo $row->data; ?></p>
					</div>				 
					<div class="form-group col-md-3">
					   <label >Cidade</label>
					   <p><?php echo $row->cidade; ?></p>
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >1) Você ministra o componente curricular Arte na escola onde você atua? </label>
					   <p><?php echo $row->q1; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>2) Nas suas aulas de Arte, predomina o trabalho com qual(is) modalidade(s) artística(s)? Você pode marcar mais de uma opção.</label>
						<p><?php echo $row->q2; ?></p>
						<label >Outros? </label>
						<p><?php echo $row->q2_outros; ?></p>	
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label >3) Você trabalha com Música em suas aulas de Arte? </label>
					   <p><?php echo $row->q3; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					   <label>4) A escola na qual você dá aula oferece a disciplina Música em seu currículo básico?</label>
					   <p><?php echo $row->q4; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5) Você possui formação superior (licenciatura ou bacharelado) em alguma modalidade artística? </label>
					   <p><?php echo $row->q5; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-8">
					   <label >5.1) Se respondeu "Sim" para a questão anterior, especifique:</label>
					   <p><?php echo $row->q5_1; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
						<label>5.2) Em que modalidade artística?</label>
						<p><?php echo $row->q5_2; ?></p>
						<label >Outros? </label>
						<p><?php echo $row->q5_2_outros; ?></p>					
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>6) Você possui algum tipo de formação (exceto formação de nível superior) em alguma modalidade artística (Música, Teatro, Artes Visuais ou Dança)?</label>
					   <p><?php echo $row->q6; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label>6.1) Se respondeu "Sim" para a questão anterior, especifique (são considerados quaisquer tipos de cursos livres, aulas particulares, cursos de extensão, cursos de formação e etc., em qualquer modalidade artística): </label>
					   <p><?php echo $row->q6_1; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label>7) Na sua escola, existe algum tipo de atividade extracurricular (contraturno) na escola voltada para música?</label>
					   <p><?php echo $row->q7; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.1) Quais atividades são desenvolvidas? </label>
					   <p><?php echo $row->q7_1; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >7.2) Você sabe como esta atividade é financiada?</label>
					   <p><?php echo $row->q7_2; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >8) A escola possui materiais e/ou equipamentos específicos para a utilização nas aulas de Arte?</label>
					   <p><?php echo $row->q8; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-9">
					   <label >8.1) Se "Sim", especifique os materiais e/ou equipamentos disponíveis. </label>
					   <p><?php echo $row->q8_1; ?></p>
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
									<div>
										<p><?php echo $row->q9_1a; ?></p>
									</div>									
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_1b; ?></p>
									</div>									
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_1c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Violão</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_2a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_2b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_2c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Percussão</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_3a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_3b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_3c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Teclado</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_4a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_4b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_4c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Instrumentos de Banda de Música/Banda de Fanfarra</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_5a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_5b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_5c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Livros Didáticos</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_6a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_6b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q9_6c; ?></p>
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
					   <p><?php echo $row->q9_complemento; ?></p>					   
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
									<div>
										<p><?php echo $row->q10_1a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_1b; ?></p>
									</div>
								</td>
								<td class="text-center">
									NÃO SE APLICA
								</td>								
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Conexão de Internet sem fio</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_2a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_2b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_2c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Conexão de Internet via cabo</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_3a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_3b; ?></p>
									</div>
								</td>
								<td class="text-center">
									NÃO SE APLICA
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Microfone de computador</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_4a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_4b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_4c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Microfone profissional</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_5a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_5b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_5c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Caixas de som para computadores</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_6a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_6b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_6c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Caixas de som amplificadas</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_7a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_7b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_7c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Micro System/Mini System</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_8a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_8b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_8c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Tablet(s)</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_9a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_9b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_9c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Notebook(s)</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_10a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_10b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_10c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #e6e6e6">
								<td class="text-center">Mesa de Som</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_11a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_11b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_11c; ?></p>
									</div>
								</td>
							</tr>
							<tr style="background-color: #f5f5f0">
								<td class="text-center">Data show</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_12a; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_12b; ?></p>
									</div>
								</td>
								<td class="text-center">
									<div>
										<p><?php echo $row->q10_12c; ?></p>
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
					   <p><?php echo $row->q10_complemento; ?></p>					   
					</div>					
				</div>

				<div class="row">
					<div class="form-group col-md-12">
					   <label>11) O projeto pedagógico da escola prevê a abordagem de conteúdos referentes às raízes afro-brasileiras e indígenas em sala de aula?</label>
					   <p><?php echo $row->q11; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >11.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <p><?php echo $row->q11_1; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12) Nas aulas de Arte ministradas por você, são abordados conteúdos referentes às raízes afro-brasileiras e indígenas? </label>
					   <p><?php echo $row->q12; ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					   <label >12.1) Se sim, esses conteúdos também são abordados no campo da música?</label>
					   <p><?php echo $row->q12_1; ?></p>
					</div>					
				</div>
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
					<a href="administrador.php" class="btn btn-success">Voltar</a>
					<a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-primary">Editar</a>					
					<a class="btn btn-danger"  href="del.php?id=<?php echo $row->id; ?>">Excluir</a>
				</div>
			</div>
		</div>
		<p class="text-center text-success">	
		<?php	
		if(isset($_SESSION['update'])){
			echo $_SESSION['update'] ;
			unset($_SESSION['update']);
		}
		?>
	</p>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>


<?php } }




?>

