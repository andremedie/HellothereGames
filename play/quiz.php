<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 if (isset($_SESSION['quid']) && isset($_SESSION['q'])) {
	require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");
	
	$quiz_id = $_SESSION['quid'];
	$question_number = $_SESSION['q'];
	
	$query = "SELECT question_id,question_text FROM quiz JOIN question ON question_id = quiz_id WHERE question_quiz = $quiz_id LIMIT $question_number,1;";

	$result = mysqli_query($dbc,$query);
	
	$row = mysqli_fetch_array($result);

	$question = $row['question_text'];
	$question_id = $row['question_id'];
	
	$query = "SELECT * FROM alternative WHERE alternative_question = $question_id;";

	$result = mysqli_query($dbc,$query);
	
	echo $question . "<br><br>";
	
	while($row = mysqli_fetch_array($result)){
		echo $row["alternative_text"] . "<br>";
	}
		
	
	
 }
}
    
 




	
