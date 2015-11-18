<?php
session_start();
include_once("connect.php");

$usuariot = $_POST['email'];
$senhat = $_POST['senha'];
//echo $usuariot.' - '.$senhat;

$result = $conexao->query("SELECT * FROM adminmusica WHERE email = '$usuariot' and senha = '$senhat'"); 
$linhas = $result->num_rows;

if($linhas == 0){
	
	$_SESSION['loginErro'] = "Usuário ou Senha inválido!";
	$url = 'login.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	/*$url = 'errologin.html';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';*/
	
	
}else{
	$row = $result->fetch_object(); 
	$_SESSION['email'] = $row->email;
	$url = 'administrador.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	}



?>