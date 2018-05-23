function start_quiz(){
	question = 1;
	next_question();
}

function next_question(){
	question++;
	 var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("q").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "quiz.php", true);
	  xhttp.send();
	 ;
}
