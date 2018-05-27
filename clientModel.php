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
	else if($_GET['action'] == "check_status"){

		date_default_timezone_set("America/New_York");
		$date =  date("y-m-d");
		$time =  intval(date("hi"));
		$am = date("a");
		if($date == "18-05-27" && $am == "am" && ($time < $d_time && $time >= 855)){
			echo "countdown-in-progress";
		}
		else if($date == "18-05-27" && $am == "am" && ($time >= $d_time)){
			echo "we-are-live";
		}
		else{
			echo "sit-tight" . $time;
		}
		
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

