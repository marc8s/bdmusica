<?php
session_start();
include_once("seguranca.php");

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
	$q9_1a = $_POST['q9_1a'];
	$q9_1b = $_POST['q9_1b'];
	$q9_1c = $_POST['q9_1c'];
	$q9_2a = $_POST['q9_2a'];
	$q9_2b = $_POST['q9_2b'];
	$q9_2c = $_POST['q9_2c'];
	$q9_3a = $_POST['q9_3a'];
	$q9_3b = $_POST['q9_3b'];
	$q9_3c = $_POST['q9_3c'];
	$q9_4a = $_POST['q9_4a'];
	$q9_4b = $_POST['q9_4b'];
	$q9_4c = $_POST['q9_4c'];
	$q9_5a = $_POST['q9_5a'];
	$q9_5b = $_POST['q9_5b'];
	$q9_5c = $_POST['q9_5c'];
	$q9_6a = $_POST['q9_6a'];
	$q9_6b = $_POST['q9_6b'];
	$q9_6c = $_POST['q9_6c'];
	$q9_complemento = $_POST['q9_complemento'];
	$q10_1a = $_POST['q10_1a'];
	$q10_1b = $_POST['q10_1b'];
	$q10_2a = $_POST['q10_2a'];
	$q10_2b = $_POST['q10_2b'];
	$q10_2c = $_POST['q10_2c'];
	$q10_3a = $_POST['q10_3a'];
	$q10_3b = $_POST['q10_3b'];
	$q10_4a = $_POST['q10_4a'];
	$q10_4b = $_POST['q10_4b'];
	$q10_4c = $_POST['q10_4c'];
	$q10_5a = $_POST['q10_5a'];
	$q10_5b = $_POST['q10_5b'];
	$q10_5c = $_POST['q10_5c'];
	$q10_6a = $_POST['q10_6a'];
	$q10_6b = $_POST['q10_6b'];
	$q10_6c = $_POST['q10_6c'];
	$q10_7a = $_POST['q10_7a'];
	$q10_7b = $_POST['q10_7b'];
	$q10_7c = $_POST['q10_7c'];
	$q10_8a = $_POST['q10_8a'];
	$q10_8b = $_POST['q10_8b'];
	$q10_8c = $_POST['q10_8c'];
	$q10_9a = $_POST['q10_9a'];
	$q10_9b = $_POST['q10_9b'];
	$q10_9c = $_POST['q10_9c'];
	$q10_10a = $_POST['q10_10a'];
	$q10_10b = $_POST['q10_10b'];
	$q10_10c = $_POST['q10_10c'];
	$q10_11a = $_POST['q10_11a'];
	$q10_11b = $_POST['q10_11b'];
	$q10_11c = $_POST['q10_11c'];
	$q10_12a = $_POST['q10_12a'];
	$q10_12b = $_POST['q10_12b'];
	$q10_12c = $_POST['q10_12c'];
	$q10_complemento = $_POST['q10_complemento'];
	$q11 = $_POST['q11'];
	$q11_1 = $_POST['q11_1'];
	$q12 = $_POST['q12'];
	$q12_1 = $_POST['q12_1'];
	
	$sql = "INSERT INTO `questionario`(`id`, `escola`, `cidade`, `data`, `q1`, `q2`, `q2_outros`, `q3`, `q4`, `q5`, `q5_1`, `q5_2`, `q5_2_outros`, `q6`, `q6_1`, `q7`, `q7_1`, `q7_2`, `q8`, `q8_1`, `q9_1a`, `q9_1b`, `q9_1c`, `q9_2a`, `q9_2b`, `q9_2c`, `q9_3a`, `q9_3b`, `q9_3c`, `q9_4a`, `q9_4b`, `q9_4c`, `q9_5a`, `q9_5b`, `q9_5c`, `q9_6a`, `q9_6b`, `q9_6c`, `q9_complemento`, `q10_1a`, `q10_1b`, `q10_2a`, `q10_2b`, `q10_2c`, `q10_3a`, `q10_3b`, `q10_4a`, `q10_4b`, `q10_4c`, `q10_5a`, `q10_5b`, `q10_5c`, `q10_6a`, `q10_6b`, `q10_6c`, `q10_7a`, `q10_7b`, `q10_7c`, `q10_8a`, `q10_8b`, `q10_8c`, `q10_9a`, `q10_9b`, `q10_9c`, `q10_10a`, `q10_10b`, `q10_10c`, `q10_11a`, `q10_11b`, `q10_11c`, `q10_12a`, `q10_12b`, `q10_12c`, `q10_complemento`, `q11`, `q11_1`, `q12`, `q12_1`) VALUES ";	
	$sql .= "('', '$escola', '$cidade','$data', '$q1', '$q2', '$q2_outros', '$q3', '$q4', '$q5', '$q5_1', '$q5_2', '$q5_2_outros', '$q6', '$q7', '$q7_1', '$q7_2', '$q8', '$q9_1a', '$q9_1b', '$q9_1c', '$q9_2a', '$q9_2b', '$q9_2c', '$q9_3a', '$q9_3b', '$q9_3c', '$q9_4a', '$q9_4b', '$q9_4c', '$q9_5a', '$q9_5b', '$q9_5c', '$q9_6a', '$q9_6b', '$q9_6c', '$q9_complemento', '$q10_1a', '$q10_1b', '$q10_2a', '$q10_2b', '$q10_2c','$q10_3a', '$q10_3b', '$q10_4a', '$q10_4b', '$q10_4c', '$q10_5a', '$q10_5b', '$q10_5c','$q10_6a', '$q10_6b', '$q10_6c','$q10_7a', '$q10_7b', '$q10_7c','$q10_8a', '$q10_8b', '$q10_8c','$q10_9a', '$q10_9b', '$q10_9c','$q10_10a', '$q10_10b', '$q10_10c', '$q10_11a', '$q10_11b', '$q10_11c','$q10_12a', '$q10_12b', '$q10_12c', '$q10_complemento', '$q11', '$q11_1', '$q12', '$q12_1')";
	
	
	$conexao->query($sql);
	$conexao->close();	
	$url = 'mensagem.php';	
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	$_SESSION['update'] = "Escola cadastrada com Sucesso!";
}
?>
