<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	include_once("connect.php");

	$escola = $_POST['campo1'];
	$cidade = $_POST['campo2'];
	$identificador = $_POST['campo3'];
	$telefone = $_POST['campo4'];

	$sql = "INSERT INTO musicanaescola VALUES";
	$sql .= "('$escola', '$cidade', '$identificador', '$telefone')";
	$conexao->query($sql);
	$conexao->close();
	$url = 'view.php?id='.$identificador;
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	$_SESSION['update'] = "Escola cadastrada com Sucesso!";
}
?>
