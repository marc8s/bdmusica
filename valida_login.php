<?php
include_once("connect.php");

$usuariot = $_POST['email'];
$senhat = $_POST['senha'];
echo $usuariot.' - '.$senhat;

/*$sql = "UPDATE musicanaescola set Escola ='$escola', Cidade ='$cidade', Identificador= '$identificador', Telefone='$telefone' WHERE Identificador = $identificador";
$conexao->query($sql);
$conexao->close();*/

?>