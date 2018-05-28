<?php

session_start();

require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");


if(isset($_GET['get_info'])){
	
	echo "<p id='control_timer'></p>";

	$question = $_GET['get_info'];
	
	$query = "SELECT question_text FROM question WHERE question_id = $question";

	$result = mysqli_query($dbc,$query);		
	
	?>
		
	<p class="control_question_text"> <?php echo mysqli_fetch_array($result)[0]; ?> </p>
	
	<?php
	$query = "SELECT * FROM alternative WHERE alternative_question = $question";

	$result = mysqli_query($dbc,$query);		
	

	while($row = mysqli_fetch_array($result)){
		$alt_id = $row['alternative_id'];
		$corr = $row['alternative_correct'];
		?>
		
		<p class="control_alternative_text <?php if($corr==1)echo "control_correct"; else echo "control_wrong";?>"> <?php echo $row['alternative_text']; ?> <span id="alt<?php echo $alt_id; ?>">0%</span></p>
		
		<?php
		
	}
	
}
else if(isset($_GET['chose'])){

	$question = $_GET['chose'];

	$query = "SELECT * FROM question WHERE question_status='RUNNING'";
	if(mysqli_num_rows(mysqli_query($dbc,$query)) != 0){
		http_response_code(409);
	}

	$query = "SELECT question_status FROM question WHERE question_id = $question";

	if(mysqli_fetch_array(mysqli_query($dbc,$query))[0] == "COMPLETE"){
		echo "<p id='control_timer' > TIME'S UP</p>";
	}
	else{
		echo "<p class='control_start_question' onmousedown = startQ($question)> START QUESTION</p>";
	}

	
	$query = "SELECT question_text FROM question WHERE question_id = $question";

	$result = mysqli_query($dbc,$query);		
	
	?>
		
	<p class="control_question_text"> <?php echo mysqli_fetch_array($result)[0]; ?> </p>
	
	<?php
	$query = "SELECT * FROM alternative WHERE alternative_question = $question";

	$result = mysqli_query($dbc,$query);		
	

	while($row = mysqli_fetch_array($result)){
		$alt_id = $row['alternative_id'];
		$corr = $row['alternative_correct'];
		?>
		
		<p class="control_alternative_text <?php if($corr==1)echo "control_correct"; else echo "control_wrong";?>"> <?php echo $row['alternative_text']; ?> <span id="alt<?php echo $alt_id; ?>">0%</span></p>
		
		<?php
		
	}

}
else if(isset($_GET['start_question'])){
	
	$quid = $_GET['start_question'];
	$query = "SELECT * FROM question WHERE question_status='RUNNING'";
	if(mysqli_num_rows(mysqli_query($dbc,$query)) == 0){
		$query = "UPDATE question SET question_status = 'RUNNING' , question_started = current_timestamp WHERE question_id = $quid;";
		$result = mysqli_query($dbc,$query);		
	}
	else{
		http_response_code(409);
	}
	
	
}
else if(isset($_GET['close'])){
	
	$quid = $_GET['close'];
	$query = "UPDATE question SET question_status = 'COMPLETE' WHERE question_id = $quid;";
	$result = mysqli_query($dbc,$query);		
		
}



?>

