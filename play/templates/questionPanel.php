<?php
while($row = mysqli_fetch_array($result)){	
	$n++;
	if($row['question_status'] == "NOT STARTED"){
		?>
		<div id="q<?php echo $n; ?>" class="control_q_name"  onmousedown="choseQ(<?php echo $n; ?>)">
			<span id="status<?php echo $n; ?>">Chose</span> Question <?php echo $n; ?>
		</div>
		<?php
	}
	else if($row['question_status'] == "COMPLETE"){ 
		?>
		<div class="control_q_name_complete"  onmousedown="choseQ(<?php echo $n; ?>)">
			Completed Question <?php echo $n; ?>
		</div>
		<?php	
	}
	else if($row['question_status'] == "RUNNING"){ 
		?>
		<div class="control_q_name_running" >
			Running Question <?php echo $n; ?>
		</div>
		<?php	
	}
?>
	

<?php
}
?>