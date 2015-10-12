<?php
include_once("connect.php");

$escola = $_POST['campo1'];
$cidade = $_POST['campo2'];
$identificador = $_POST['campo3'];
$telefone = $_POST['campo4'];

$sql = "INSERT INTO musicanaescola VALUES";
$sql .= "('$escola', '$cidade', '$identificador', '$telefone')";
$conexao->query($sql);
$conexao->close();
include("index.html");
?>

