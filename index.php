<!DOCTYPE html>
<?php
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
						<li><a href="index.php">Início</a></li>
						<li><a href="#">Opções</a></li>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main" class="container-fluid">
			<!--<h3 class="page-header">Página Inicial</h3> -->
			<div id="top" class="row">
				<div class="col-md-3">
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
				<div class="col-md-3">
					<a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
				</div>
			</div> <!-- /#top -->
			<hr />
			<?php 
			//registros por pagina
			$por_pagina = 8;
			$resultado = $conexao->query("SELECT * FROM musicanaescola");
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
			$resultado = $conexao->query("SELECT * FROM musicanaescola LIMIT $offset, $por_pagina");
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
								<th>Telefone</th>
								<th class="actions">Ações</th>
							 </tr>
						</thead>
						<tbody>	
							<?php 
							while($row = $resultado->fetch_object()){
								echo "<tr>";
									echo "<td>".$row->Identificador."</td>";
									echo "<td>".$row->Escola."</td>";
									echo "<td>".$row->Cidade."</td>";
									echo "<td>".$row->Telefone."</td>";
									?>
									<td class="actions">
										<a class="btn btn-success btn-xs" href="view.php?id=<?php echo $row->Identificador; ?>">Visualizar</a> 
										<a class="btn btn-warning btn-xs" href="edit.php?id=<?php echo $row->Identificador; ?>">Editar</a> 
										<a class="btn btn-danger btn-xs"  href="del.php?id=<?php echo $row->Identificador; ?>">Excluir</a>
									</td>
									<?php
									
								echo "</tr>";								
							}
							//$conexao->close();
							?>
						</tbody>
					</table>
			 
				</div>
			</div> <!-- /#list -->
		 
			<div id="bottom" class="row">
				<div class="col-md-12">
				<!--A quantidade de páginas depende de um cálculo sobre a quantidade de registros-->				
					<!--<ul class="pagination"><!--fazer os links href com back-end-->
						<!--<li class="disabled"><a>&lt; Anterior</a></li>
						<li class="disabled"><a>1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
					</ul><!-- /.pagination -->
					<?php
					if ($linhas > 0) {
						echo '<ul class="pagination">';	
						if($pagina != 1){
							$anterior = $pagina - 1;
						}else{
							$anterior = $pagina;
						}
						echo "<li><a href='index.php?pagina={$anterior}'>Anterior</a></li>";							
						for ($n = 1; $n <= $paginas; $n++) {
							echo "<li><a href='index.php?pagina={$n}'>{$n}</a></li>";							
						}
						if($pagina < $paginas){
							$proximo = $pagina + 1;
						}else{
							$proximo = $pagina;
						}
						echo "<li><a href='index.php?pagina={$proximo}'>Próximo</a></li>";		
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