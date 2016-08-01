<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	include_once("connect.php");

	$Escola = $_POST['campo1'];
	$Cidade = $_POST['campo2'];	
	$Telefone = $_POST['campo4'];	
	$sql = "INSERT INTO `musicanaescola`(`Identificador`, `Escola`, `Cidade`, `Telefone`) VALUES ";	
	$sql .= "('', '$Escola', '$Cidade','$Telefone')";
	
	
	$conexao->query($sql);
	$conexao->close();
	//$url = 'view.php?id='.$identificador;
	$url = 'mensagem.php';	
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	$_SESSION['update'] = "Escola cadastrada com Sucesso!";
}
?>
