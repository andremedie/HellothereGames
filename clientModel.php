<?php

session_start();

//require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");

if(isset($_GET['action'])){
	
	if($_GET['action'] == "set_nickname" && isset($_GET['value'])){
		$_SESSION['nickname'] = $_GET['nickname'];	
	}
	
	
	
}



?>

