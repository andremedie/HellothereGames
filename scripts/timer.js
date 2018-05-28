
var n = 0;

function chose(alt){
	if(n < 10000){
		$("#qAlt1").css('background-color',"white");
		$("#qAlt2").css('background-color',"white");
		$("#qAlt3").css('background-color',"white");
		$("#qAlt1").css('color',"#0074BB");
		$("#qAlt2").css('color',"#0074BB");
		$("#qAlt3").css('color',"#0074BB");
		
		$("#qAlt"+alt).css('background-color',"#0074BB");
		$("#qAlt"+alt).css('color',"white");
	}
}


function startTimer(){
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



	var timer = setInterval(function(){

		n += 10;
		
		if(n >= 2500){
			$("#timer").html(timer1+timer2+hidden+timer3+timer4+timer_text);
			$("#hidden4").show();
			$("#hidden3").show();
			$("#hidden2").hide();
			$("#last_hidden").show();
		}
		
		if(n >= 5000){
			$("#timer").html(timer1+timer2+timer3+hidden+timer4+timer_text);
			$("#hidden4").show();
			$("#hidden3").show();
			$("#hidden2").show();
			$("#last_hidden").show();
		}
		
		if(n >= 7500){
			$("#timer").html(timer1+timer2+timer3+timer4+hidden+timer_text);
			$("#hidden4").show();
			$("#hidden3").show();
			$("#hidden2").show();
			$("#last_hidden").show();
		}
		
		if(n >= 10000){
			width = $("#qContainer").width();
			$("#timer_text").css("width",width+"px");
			$("#timer").css("margin","0px");
			$("#timer_text").html("time's up");		
			clearInterval(timer);
		}
		else{
			$("#timer_text").html(Math.round(10.5-n/1000));
		}
		
		deg = (n/10*0.36);
		
		$("#hidden_parts").css("transform","rotate("+deg+"deg)");
		
	},10);

}