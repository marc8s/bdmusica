<?php
session_start();
include_once("seguranca.php");

if($_SESSION['email'] != ""){
	include_once("connect.php");

	if($_SESSION['email'] != ""){
	include_once("connect.php");

	$escola = $_POST['campo1'];
	$data = $_POST['campo2'];	
	$cidade = $_POST['campo3'];	
	$q1 = $_POST['q1'];	
	$q2 = $_POST['q2'];
	$q2_outros = $_POST['q2_outros'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q5_1 = $_POST['q5_1'];
	$q5_2 = $_POST['q5_2'];
	$q5_2_outros = $_POST['q5_2_outros'];
	$q6 = $_POST['q6'];
	$q6_1 = $_POST['q6_1'];
	$q7 = $_POST['q7'];
	$q7_1 = $_POST['q7_1'];
	$q7_2 = $_POST['q7_2'];
	$q8 = $_POST['q8'];
	$q8_1 = $_POST['q8_1'];
	
	
	$sql = "INSERT INTO `questionario`(`id`, `escola`, `cidade`, `data`, `q1`, `q2`, `q2_outros`, `q3`, `q4`, `q5`, `q5_1`, `q5_2`, `q5_2_outros`, `q6`, `q6_1`, `q7`, `q7_1`, `q7_2`, `q8`, `q8_1`) VALUES ";	
	$sql .= "('', '$escola', '$cidade','$data', '$q1', '$q2', '$q2_outros', '$q3', '$q4', '$q5', '$q5_1', '$q5_2', '$q5_2_outros', '$q6', '$q6_1', '$q7', '$q7_1', '$q7_2', '$q8', '$q8_1')";
	
	
	$conexao->query($sql);
	$conexao->close();
	//$url = 'view.php?id='.$identificador;
	$url = 'mensagem.php';	
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	$_SESSION['update'] = "Escola cadastrada com Sucesso!";
}
?>
