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

	<?php $compteurQuestion = 1 ?>
	
	<form>
	
		<div id="surveyQuestion">
		</div>

		<div id="surveyAnswer">
		</div>
		
		<div id="surveyNext">
			<p class="flip" onclick="myFunction(1)">Next Question</p>
		</div>
		
	</form>

	<script>
	
    function myFunction(id) {
    	var question = document.getElementById("surveyQuestion");
    	<?php $q=$questions[1];?>
    	question.innerHTML="<?php echo $q[1];?>"	
    }

    </script>

</body>
</html>