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
	else if($_GET['action'] == "get_status"){		

		$query = "SELECT * FROM question WHERE question_status = 'RUNNING';";

		if(mysqli_num_rows(mysqli_query($dbc,$query)) == 1 ){
			echo "QUESTION_IN_PROGRESS";
		}

	}
	else if($_GET['action'] == "get_question"){		

		$query = "SELECT * FROM question JOIN alternative ON question_id=alternative_question WHERE question_status = 'RUNNING';";
		$text = mysqli_fetch_array(mysqli_query($dbc,$query))['question_text'];
		$result = mysqli_query($dbc,$query);
		?>
		<div id="qScreen">
			<div id="qLogo" class="logo"> </div>
			<div id="qContainer">

				<div id="timer">
					<div id="timer1" ></div>
					<div id="last_hidden" ></div>
					<div id="hidden_parts">
						<div id="hidden2"></div>
						<div id="hidden3"></div>
						<div id="hidden4"></div>
					</div>
					<div id="timer2"></div>
					<div id="timer3"></div>
					<div id="timer4"></div>
					<p id="timer_text"></p>
				</div>
				
				<p id="qText"><?php echo $text; ?></p>
				<div id="qAlternatives">
				<?php
				$n = 0;
				while($row = mysqli_fetch_array($result)){ $n++;
					?>
					<p id="qAlt<?php echo $n; ?>" onmousedown="chose(<?php echo $n; ?>)"><?php echo $row['alternative_text']; ?></p>
					<?php
				}
				?>
				</div>

			</div>

		</div>
		<?php
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
	$d_day = date_create('2018-05-29 6:11:30pm');
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