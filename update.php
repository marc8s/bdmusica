<?php
session_start();
include_once("connect.php");

$escola = $_POST['campo2'];
$cidade = $_POST['campo3'];
$identificador = $_POST['campo1'];
$telefone = $_POST['campo4'];

$sql = "UPDATE musicanaescola set Escola ='$escola', Cidade ='$cidade', Identificador= '$identificador', Telefone='$telefone' WHERE Identificador = $identificador";
$conexao->query($sql);
$conexao->close();
$url = 'view.php?id='.$identificador;
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
$_SESSION['update'] = "Cadastro Atualizado com Sucesso!";

?>