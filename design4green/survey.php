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
		<div id="surveyQuestion"></div>
		<br>
		<div id="surveyAnswer"></div>
		<br>
		<div id="surveyNext">
			<p class="flip" onclick="displayQuestion()">Next Question</p>
		</div>

	</form>

	<script>

	var compteur = 1;
	var questionList;
    function displayQuestion() {
        
    	var question = document.getElementById("surveyQuestion");
    	var answer = document.getElementById("surveyAnswer");
    	
		var listQuestion = [<?php foreach ($questions as $q) {?>
			<?php echo "[", $q[0],",", $q[1],"," ?>
	    	<?php $r = $q[2];
        foreach ($r as $reponse) {  ?>
        <?php echo "[", $r[0],",", $r[1],",", $r[2], "]"?>
	    	    <?php }}?>;]
	    console.log(questionList);
    }
    		question.innerHTML="<?php echo $q[1];?>";
    		answer.innerHTML=<?php echo '"',$reponse[2],'"';?>;














    
    </script>

</body>
</html>