
var TOTAL_WIDTH = 250;
var BORDER_WIDTH = 40;
var FONT_SIZE = 90;
var CONTAINER_WIDTH = 800;


var bg_color = "white";
var circle_color = "blue";

var WIDTH = TOTAL_WIDTH / 2 - BORDER_WIDTH;
var OVERLAY = 5;
var BIG_BORDER_WIDTH = BORDER_WIDTH + OVERLAY;

document.getElementById("timerStyle").innerHTML=
'#timer1,#timer2,#timer3,#timer4{'+
'	background-color:;'+
'	margin-left:2px;'+
'	margin-top:2px;'+
'	position:absolute;'+
'	border:solid '+circle_color+';'+
'	width:'+WIDTH+'px;'+
'	height:'+WIDTH+'px;'+
'}'+
'#timer1{'+
'	margin-left:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: '+BORDER_WIDTH+'px '+BORDER_WIDTH+'px 0px 0px;'+
'	border-radius:0% 100% 0% 0%;'+
'}'+
'#timer2{'+
'	margin-left:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	margin-top:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: 0px '+BORDER_WIDTH+'px '+BORDER_WIDTH+'px 0px;'+
'	border-radius:0% 0% 100% 0%;'+
'}'+
'#timer3{'+
'	margin-top:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: 0px 0px '+BORDER_WIDTH+'px '+BORDER_WIDTH+'px;'+
'	border-radius:0% 0% 0% 100%;'+
'}'+
'#timer4{'+
'	border-width: '+BORDER_WIDTH+'px 0px 0px '+BORDER_WIDTH+'px;'+
'	border-radius:100% 0% 0% 0%;'+
'}'+
'#hidden_parts{'+
'	position:absolute;'+
'	width:'+(TOTAL_WIDTH + OVERLAY / 2)+'px;'+
'	height:'+(TOTAL_WIDTH + OVERLAY / 2)+'px;'+
'}'+
'#show1,#show2,#show3,#show4,#hidden1,#hidden2,#hidden3,#hidden4,#last_hidden{'+
'	position:absolute;'+
'	border:solid '+bg_color+';'+
'	width:'+(WIDTH - OVERLAY / 2 )+'px;'+
'	height:'+(WIDTH - OVERLAY / 2 )+'px;'+
'}'+
'#show1,#hidden1,#last_hidden{'+
'	margin-left:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: '+BIG_BORDER_WIDTH+'px '+BIG_BORDER_WIDTH+'px 0px 0px;'+
'	border-radius:0%  100% 0% 0%;'+
'}'+
'#show2,#hidden2{'+
'	margin-left:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	margin-top:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: 0px '+BIG_BORDER_WIDTH+'px '+BIG_BORDER_WIDTH+'px 0px;'+
'	border-radius:0% 0% 100% 0%;'+
'}'+
'#show3,#hidden3{'+
'	margin-top:'+(WIDTH+BORDER_WIDTH)+'px;'+
'	border-width: 0px 0px '+BIG_BORDER_WIDTH+'px '+BIG_BORDER_WIDTH+'px;'+
'	border-radius:0% 0% 0% 100%;'+
'}'+
'#show4,#hidden4{'+
'	border-width: '+BIG_BORDER_WIDTH+'px 0px 0px '+BIG_BORDER_WIDTH+'px;'+
'	border-radius:100% 0% 0% 0%;'+
'}'+
'#timer_text{'+
'	position:absolute;'+
'	width:'+(TOTAL_WIDTH)+'px;'+
'	height:'+(TOTAL_WIDTH)+'px;'+
'	line-height:'+(TOTAL_WIDTH)+'px;'+
'	text-align:center;'+
'	font-size:'+(FONT_SIZE)+'px;'+
'	font-family:Verdana;'+
'}'+
'#timer{'+
'	margin:auto; ' +
'	width:'+(TOTAL_WIDTH)+';'+
'	height:'+(TOTAL_WIDTH)+'px;'+
'}';
