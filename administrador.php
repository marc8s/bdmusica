<!DOCTYPE html>
<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	include_once("connect.php");
?>
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
			<!--<h3 class="page-header">Página Inicial</h3> -->
			<div id="top" class="row">
				<div class="col-md-2">
				<!--	<h2>Itens</h2>-->
				</div>			 
				<div class="col-md-6"><!--implementar requisição de busca com ajax-->
					<form action="busca.php" method="post">
						<div class="input-group h2" >
							<input name="search" class="form-control" id="search" type="text" placeholder="Digite aqui o nome da Escola">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</form>
				</div>			 
				<div class="col-md-2">
					<!-- <a href="add.php" class="btn btn-primary pull-right h2">Novo Item</a>	-->				
					<a href="questionario.php" class="btn btn-primary pull-right h2">Novo Questionário</a>					
				</div>
				<div class="col-md-2">					
					<a href="download.php" class="btn btn-primary pull-right h2">Download Tabela</a>
				</div>
			</div> <!-- /#top -->
			<p class="text-center text-danger">	
		<?php	
		if(isset($_SESSION['update'])){
			echo $_SESSION['update'] ;
			unset($_SESSION['update']);
		}
		?>
		</p>
			<hr />
			<?php 
			//registros por pagina
			$por_pagina = 3;
			$resultado = $conexao->query("SELECT * FROM questionario");
			$linhas = $resultado->num_rows;			
			//calcula o máximo de páginas
			$paginas =  (($linhas % $por_pagina) > 0) ? (int)($linhas / $por_pagina) + 1 : ($linhas / $por_pagina);
			
			//****************************************
			if (isset($_GET['pagina'])) {
			  $pagina = (int)$_GET['pagina'];
			} else {
			  $pagina = 1;
			}
			$pagina = max(min($paginas, $pagina), 1);
			$offset = ($pagina - 1) * $por_pagina;
			//****************************************
			// Monta outra consulta MySQL, agora a que fará a busca com paginação
			$resultado = $conexao->query("SELECT * FROM questionario LIMIT $offset, $por_pagina");
			// Número máximos de botões de paginação 
			$max_links = 3;

			?>
			<div id="list" class="row">
				<div class="table-responsive col-md-12">
					<table class="table table-striped" cellspacing="0" cellpadding="0">
						<thead>
							<tr>
								<th>ID</th>
								<th>Escola</th>
								<th>Cidade</th>								
								<th class="actions">Ações</th>
							 </tr>
						</thead>
						<tbody>	
							<?php 
							while($row = $resultado->fetch_object()){ 
								echo "<tr>";
									echo "<td>".$row->id."</td>";
									echo "<td>".$row->escola."</td>";
									echo "<td>".$row->cidade."</td>";									
									?>
									<td class="actions">
										<a class="btn btn-success btn-xs" href="view.php?id=<?php echo $row->id; ?>">Visualizar</a> 
										<a class="btn btn-warning btn-xs" href="edit.php?id=<?php echo $row->id; ?>">Editar</a> 
										<a class="btn btn-danger btn-xs"  href="del.php?id=<?php echo $row->id; ?>">Excluir</a>
									</td>
									<?php
									
								echo "</tr>";								
							}							
							?>
						</tbody>
					</table>
			 
				</div>
			</div> <!-- /#list -->
		 
			<div id="bottom" class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">				
					<?php
					if ($linhas > 0) {
						echo '<ul class="pagination">';						
						echo "<li><a href='administrador.php?pagina=1'>Primeira</a></li>";	
						
						$n = $pagina;
						$limite = $pagina + 2;						
						
						if($n == 1 || $limite <= $paginas){
							echo "<li><a href='#'>{$n}</a></li>";
							if($pagina < $paginas){
								$n = $pagina + 1;
								echo "<li><a href='administrador.php?pagina={$n}'>{$n}</a></li>";
							}
							if($n < $paginas){
								$n = $n + 1;
								echo "<li><a href='administrador.php?pagina={$n}'>{$n}</a></li>";
							}
						}else{
							if($limite == $paginas + 1){
								$auxiliar = $n - 1;
								echo "<li><a href='administrador.php?pagina={$auxiliar}'>{$auxiliar}</a></li>";
								echo "<li><a href='#'>{$n}</a></li>";
								if($pagina < $paginas){
									$n = $pagina + 1;
									echo "<li><a href='administrador.php?pagina={$n}'>{$n}</a></li>";
								}
							}else{
								if($limite == $paginas + 2){
									$auxiliar = $n - 2;
									echo "<li><a href='administrador.php?pagina={$auxiliar}'>{$auxiliar}</a></li>";
									$auxiliar = $n - 1;
									echo "<li><a href='administrador.php?pagina={$auxiliar}'>{$auxiliar}</a></li>";
									echo "<li><a href='#'>{$n}</a></li>";									
								}
							}
							
						}
						
						echo "<li><a href='administrador.php?pagina={$paginas}'>Última</a></li>";		
					}
					echo "</ul><!-- /.pagination -->";
					?>
						
				</div>
			 
			</div> <!-- /#bottom -->
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<?php } ?>