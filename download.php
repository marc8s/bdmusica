<?php
	session_start();
	// Inclui a conexão
	include_once("seguranca.php");

	if($_SESSION['email'] != ""){
		include_once("connect.php");
	}

	// Nome do Arquivo do Excel que será gerado
	$arquivo = 'questionario.xls';

	// Criamos uma tabela HTML com o formato da planilha para excel
	$tabela = '<table border="1">';
	$tabela .= '<tr>';
	$tabela .= '<td colspan="2">Dados Questionário</td>';
	$tabela .= '</tr>';
	$tabela .= '<tr>';
	$tabela .= '<td><b>Email</b></td>';
	$tabela .= '<td><b>Senha</b></td>';
	$tabela .= '</tr>';

	// Puxando dados do Banco de dados	
	$resultado = $conexao->query("SELECT * FROM adminmusica");

	while($row = $resultado->fetch_object()){	
		$tabela .= '<tr>';
		$tabela .= '<td>'.$row->email.'</td>';
		$tabela .= '<td>'.$row->senha.'</td>';
		$tabela .= '</tr>';
	}

	$tabela .= '</table>';

	// Força o Download do Arquivo Gerado
	header ('Cache-Control: no-cache, must-revalidate');
	header ('Pragma: no-cache');
	header('Content-Type: application/x-msexcel');
	header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
	echo $tabela;
?>