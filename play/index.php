<?php

session_start();

require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/dbc.php");

$query = "SELECT * FROM quiz_session WHERE quiz_session_active = 1;";

$result = mysqli_query($dbc,$query);

if(mysqli_num_rows($result) == 1){
	$row = mysqli_fetch_array($result);
?>

	<div id="site">
	QUIZ!<br>
	Nickname: <input id="nick" type="text" />
	<div class="btn" onmousedown="setNickname()">Skicka</div>
	</div>
<?php
	
}
else{
	echo "Just nu pågår inget quiz";
}
	
	
?>

<script>

var nick;

function setNickname(){
	
	
	nick = document.getElementById("nick").value;
	waitingScreen();
		
}

function waitingScreen(){
	
	document.getElementById("site").innerHTML = "";

}



</script>
