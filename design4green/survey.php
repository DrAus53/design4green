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
	
    function displayQuestion() {
        
    	var question = document.getElementById("surveyQuestion");
    	var answer = document.getElementById("surveyAnswer");
    	
    	<?php $q=$questions[1];?>
    	question.innerHTML="<?php echo $q[1];?>";

    }

    </script>

</body>
</html>