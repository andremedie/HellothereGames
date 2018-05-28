<?php

session_start();

require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");

if(isset($_GET['action'])){
	
	if($_GET['action'] == "set_nickname" && isset($_GET['value'])){
		$_SESSION['nickname'] = $_GET['value'];	
	}
	else if($_GET['action'] == "get_nickname" && isset($_SESSION['nickname'])){
		echo $_SESSION['nickname'];	
	}
	else if($_GET['action'] == "get_time"){		
		echo time_left();
	}
	else{
		http_response_code(400);
	}
}
else{
	http_response_code(400);
}

function time_left(){
	
	$d_day_str = "2018-06-12 09:00am";
	$d_day = date_create('2018-05-27 3:38:30pm');
	$now = new DateTime();
	$diff = date_diff($d_day, $now);
	
	$dd = intval($diff->format('%d'));
	$hh = intval($diff->format('%h'));
	$mm = intval($diff->format('%i'));
	$ss = intval($diff->format('%s'));
	
	$dd = $dd * 60 * 60 * 24;
	$hh = $hh * 60 * 60;
	$mm = $mm * 60;
	$ss = $ss;

	if($now < $d_day){
		return ($dd+$hh+$mm+$ss);
	}
	else{
		return -($dd+$hh+$mm+$ss);		
	}
}
	
	



?>

