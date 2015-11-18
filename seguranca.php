<?php
if($_SESSION['email'] == ""){
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	$url = 'login.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
?>