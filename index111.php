<?php

session_start();
session_unset();
session_destroy();

require("C://xampp/htdocs/quiz/dbc.php");

$query = "SELECT * FROM quiz";

$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){	
?>

	<a href="/quiz/play/?quid=<?php echo $row['quiz_id']; ?>"><p>
		<?php echo $row['quiz_name']; ?>
	</p></a>
	
	
<?php
}
?>

