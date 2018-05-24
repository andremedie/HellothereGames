<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/HellothereGames/css/controlpanel.css">
	<script src="/HellothereGames/controlpanel/scripts/controlpanel.js" > </script>
    <title>MasterQuiz</title>
    
</head>
<body>


<?php


$query = "SELECT * FROM question";

$result = mysqli_query($dbc,$query);
$n = 0;
?>
<div class="control_headline">
	<h1>YOU ARE NOT LIVE YET!</h1>
</div>
<div class="control_live">
	<span> GO LIVE qwe </span>
</div>

<div id="control_current_q">

</div>
<div class="control_q_container">
<?php
require($_SERVER['DOCUMENT_ROOT']."/HellothereGames/controlpanel/templates/questionPanel.php");
?>
</div>
