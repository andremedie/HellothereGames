<?php

session_start();

require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");

if(isset($_GET['dest'])){
	if($_GET['dest']==1){
		session_unset();
		session_destroy();
		mysqli_query($dbc,"UPDATE quiz_session SET quiz_session_active = null;");
		header("Location: admin.php");
	}
}

if(isset($_GET['quid'])){
	
	$quid = $_GET['quid'];
	
	$query = "INSERT INTO quiz_session (quiz_session_quiz,quiz_session_active) VALUES($quid,1)";

	if(mysqli_query($dbc,$query)){
		$_SESSION['quid'] = $quid;
		header("Location: admin.php");
	}
	else{
		echo "DET ÄR REDAN ETT QUIZ STARTAT!<br>";
		echo "Klicka <a href = 'admin.php'> HÄR </a> för att komma till det aktiva quizzet.";
	}
}
else if(isset($_SESSION['quid'])){
	echo "Klicka <a href = 'admin.php?act=next'> HÄR </a> för att avsluta quizzet.";
	echo "Klicka <a href = 'admin.php?dest=1'> HÄR </a> för att avsluta quizzet.";

}
else{

$query = "SELECT * FROM quiz";

$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){	
?>

	<a href="/quiz/play/admin.php?quid=<?php echo $row['quiz_id']; ?>"><p>
		<?php echo "Start " . $row['quiz_name']; ?>
	</p></a>
	
	
<?php
}

}
?>

