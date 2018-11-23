<!DOCTYPE html>
<html>

<head>

<?php
include ('dbread.php');
?>

<style>
#panel, .flip {
	font-size: 16px;
	padding: 10px;
	text-align: center;
	background-color: #4CAF50;
	color: white;
	border: solid 1px #a6d8a8;
	margin: auto;
}
#panel, #question2, #question3 {
	display: none;
}
</style>

</head>

<body>
	
	<form>
	
		<br>
		<div id="surveyQuestion">
		</div>
		<br>
		<div id="surveyAnswer">
		</div>
		<br>
		<div id="surveyNext">
			<p class="flip" onclick="displayQuestion()">Next Question</p>
		</div>

	</form>

	<script>

	var compteur = 1;
	
    function displayQuestion() {
        
    	var question = document.getElementById("surveyQuestion");
    	var answer = document.getElementById("surveyAnswer");
    	
		if (compteur==1) {
			<?php $q=$questions[1];?>
	    	question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php echo $r[3][0];?>";
	    	
		} else if (compteur==2) {
			<?php $q=$questions[2];?>
			question.innerHTML="<?php echo $q[1];?>";
            <?php $r=$q[2];?>
	    	answer.innerHTML="<?php echo $r[3][0];?>";
	    	
		} else if (compteur==3) {
			<?php $q=$questions[3];?>
			question.innerHTML="<?php echo $q[1];?>";
			
		} else if (compteur==4) {
			<?php $q=$questions[4];?>
			question.innerHTML="<?php echo $q[1];?>";
			
		} else if (compteur==5) {
			<?php $q=$questions[5];?>
			question.innerHTML="<?php echo $q[1];?>";
			
		} else if (compteur==6) {
			<?php $q=$questions[6];?>
			question.innerHTML="<?php echo $q[1];?>";
			
		} else {
	    	question.innerHTML="No more questions.";
		}

    	compteur++;
    }

    </script>

</body>
</html>