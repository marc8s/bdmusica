<?php
include_once("connect.php");

$usuariot = $_POST['email'];
$senhat = $_POST['senha'];
echo $usuariot.' - '.$senhat;

$result = $conexao->query("SELECT * FROM adminmusica WHERE email = '$usuariot' and senha = '$senhat'"); 
$linhas = $result->num_rows;

if($linhas == 0){
	$url = 'errologin.html';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	/*$_SESSION['loginErro'] = 'Usuário ou senha Inválido';
	header("Location: login.php");*/
}else{
$row = $result->fetch_object(); }



?>