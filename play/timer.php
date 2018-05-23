

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/HellothereGames/css/controlpanel.css">
    <title>MasterQuiz</title>
</head>


<style id="timerStyle"></style>
<script src="timerStyle.js"></script>

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
	<div id="timer4" ></div>
	<div id="timer_text"></div>
</div>


<script>
$("#hidden4").show();
$("#hidden3").hide();
$("#hidden2").hide();
$("#last_hidden").hide();

var hidden = "<div id='hidden_parts'><div id='hidden2' ></div><div id='hidden3' ></div><div id='hidden4' ></div></div>";
var timer1 = "<div id='timer1'></div><div id='last_hidden'></div>";
var timer2 = "<div id='timer2'></div>";
var timer3 = "<div id='timer3'></div>";
var timer4 = "<div id='timer4'></div>";
var timer_text  = "<div id='timer_text'></div>";

var n = 0;
var timer = setInterval(function(){

	n += 10;
	
	
	
	if(n == 2500){
		$("#timer").html(timer1+timer2+hidden+timer3+timer4+timer_text);
		$("#hidden4").show();
		$("#hidden3").show();
		$("#hidden2").hide();
		$("#last_hidden").show();

	}
	if(n == 5000){
		$("#timer").html(timer1+timer2+timer3+hidden+timer4+timer_text);
		$("#hidden4").show();
		$("#hidden3").show();
		$("#hidden2").show();
		$("#last_hidden").show();
	}
	if(n == 7500){
		$("#timer").html(timer1+timer2+timer3+timer4+hidden+timer_text);
		$("#hidden4").show();
		$("#hidden3").show();
		$("#hidden2").show();
		$("#last_hidden").show();
	}
	
	if(n == 10000){
		clearInterval(timer);
		$("#timer_text").html("time's up");		
		$("#timer_text").css("width","200px");		
	}
	else{
		$("#timer_text").html(Math.round(10.5-n/1000));		
	}
	
	deg = (n/10*0.36);
	
	$("#hidden_parts").css("transform","rotate("+deg+"deg)");
	//$("#show_parts").css("transform","rotate("+deg+"deg)");
	
	
	
	
		
	
},10);
</script>