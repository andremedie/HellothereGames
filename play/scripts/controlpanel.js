// 			CONFIGS:
// Time per question (in seconds)
var questionTime = 10;


var time;
var interval;

function choseQ(number){
	$.ajax({url: "control.php?chose="+number, success: function(result){
		$("#control_current_q").html(result);
	}});


}

function startQ(number){
	$.ajax({url: "control.php?start_question="+number, success: function(result){
		$("#status"+number).html("Running");
		$("#q"+number).removeClass("control_q_name");
		$("#q"+number).addClass("control_q_name_running");
		time=0;
		interval = setInterval(function(){updateCurrentContent(number)},100);
    }});
}

function closeQuestion(number){
	$.ajax({url: "control.php?close="+number, success: function(result){
		$("#status"+number).html("Completed");
		$("#q"+number).removeClass("control_q_name_running");
		$("#q"+number).addClass("control_q_name_complete");
	}});
}	 

function updateCurrentContent(number){
	time += 100;
	if(time == questionTime*1000){
		clearInterval(interval);
		closeQuestion(number);
		$.ajax({url: "control.php?get_info="+number, success: function(result){
			$("#control_current_q").html(result);
			$("#control_timer").html("TIME'S UP");
			$("#control_timer").width(200);
		}});
		return;
	}
	$.ajax({url: "control.php?get_info="+number, success: function(result){
		$("#control_current_q").html(result);
		$("#control_timer").html("TIME LEFT: " + Math.round(questionTime+0.5-time/1000));
	}});
}