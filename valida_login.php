<?php
include_once("connect.php");

$usuariot = $_POST['email'];
$senhat = $_POST['senha'];
echo $usuariot.' - '.$senhat;

$result = $conexao->query("SELECT * FROM adminmusica WHERE email = '$usuariot' and senha = '$senhat'"); 
$linhas = $result->num_rows;

if($linhas == 0){
	$url = 'mensagemErroBusca.html';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}else{
$row = $result->fetch_object(); }

/*$sql = "UPDATE musicanaescola set Escola ='$escola', Cidade ='$cidade', Identificador= '$identificador', Telefone='$telefone' WHERE Identificador = $identificador";
$conexao->query($sql);
$conexao->close();*/

?>