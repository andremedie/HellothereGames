function replace_blobs(){

	rnd_width = Math.random()*30+40;
	rnd_height = Math.random()*30+40;
	$("#yellow_blob").css("width",rnd_width+"%");
	$("#yellow_blob").css("height",rnd_height+"%");

	rnd_left = -$("#yellow_blob").width()/2;
	rnd_top = -$("#yellow_blob").height()/2;
	$("#yellow_blob").css("margin-left",rnd_left+"px");
	$("#yellow_blob").css("margin-top",rnd_top+"px");

	rnd_deg = -Math.random()*30;
	$("#yellow_blob").css("transform","rotate("+rnd_deg+"deg)");



	rnd_width = Math.random()*30+40;
	rnd_height = Math.random()*30+40;
	$("#purple_blob").css("width",rnd_width+"%");
	$("#purple_blob").css("height",rnd_height+"%");

	rnd_left = $("#view").width()-$("#purple_blob").width()/2;
	rnd_top = $("#view").height()-$("#purple_blob").height()/2;
	$("#purple_blob").css("margin-left",rnd_left+"px");
	$("#purple_blob").css("margin-top",rnd_top+"px");

	rnd_deg = Math.random()*20;
	$("#purple_blob").css("transform","rotate("+rnd_deg+"deg)");



	rnd_width = Math.random()*30+40;
	rnd_height = Math.random()*30+40;
	$("#red_blob").css("width",rnd_width+"%");
	$("#red_blob").css("height",rnd_height+"%");

	rnd_left = -$("#red_blob").width()/2;
	rnd_top = $("#view").height()-$("#red_blob").height()*0.8;
	$("#red_blob").css("margin-left",rnd_left+"px");
	$("#red_blob").css("margin-top",rnd_top+"px");

	rnd_deg = -Math.random()*20-20;
	$("#red_blob").css("transform","rotate("+rnd_deg+"deg)");




	rnd_width = Math.random()*10+50;
	rnd_height = Math.random()*10+50;
	$("#blue_blob").css("width",rnd_width+"%");
	$("#blue_blob").css("height",rnd_height+"%");

	rnd_left = $("#view").width()-$("#purple_blob").width()*0.5;
	rnd_top = -$("#blue_blob").height()*0.35;
	$("#blue_blob").css("margin-left",rnd_left+"px");
	$("#blue_blob").css("margin-top",rnd_top+"px");

	rnd_deg = Math.random()*10+45;
	$("#blue_blob").css("transform","rotate("+rnd_deg+"deg)");

}
