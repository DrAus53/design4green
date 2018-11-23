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

<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/test.css" rel="stylesheet">
<title>Brocos Team Survey</title>

</head>

<body>

	<div id="header" class="row">
		<div class="header">
			<h2 class="title">
				Design4Green Survey by Brocos Team
			</h2>
		</div>
	</div>
	
	<div id="contain" class="row">
    	<form class="quizz">
    		<div id="questionContainer">
    		
    			<div id="description">
					<h4>Introduction</h4>
        			<p>
        			      	L’alliance Green IT diffuse tous les deux ans un questionnaire afin d’évaluer la maturité des
        			entreprises françaises en matière de mise en place de services numériques écoresponsables. Ce
        			questionnaire est diffusé par l’AGIT et l’ensemble de ses partenaires durant 3 mois, du 1er janvier au
        			31 mars.
        			Il se compose de différentes questions qui reprennent les 8 grandes thématiques du Green IT – Les
        			infrastructures informatiques, le datacenter, les achats, les postes de travail, la fin de vie des
        			équipements, la gouvernance, l’impression et les applications.
        			Les réponses du questionnaire sont ensuite collectées, pondérées, compilées et analysées, donnant lieu à la création d’un Rapport détaillé.
        			</p>
			   	</div>
			   	
				<div id="flipBeginSurvey">
					<p class="flip" onclick="beginSurvey()">Let's do this !</p>
				</div>
    	
        		<div id="surveyQuestion">
        		</div>
    
        		<div id="surveyAnswer">
        		</div>
    
        		<div id="surveyNext">
        			<p class="flip" onclick="displayQuestion()">Next Question</p>
        		</div>
        		
    		</div>
    	</form>
    </div>
	
	<div id="footer">
		<div id="pied" class="footer" style="border-style:solid">
			<h1>Footer</h1>
		</div>
	</div>

	<script>

	function beginSurvey() {
		document.getElementById('questionContainer').removeChild(document.getElementById('description'));
		document.getElementById('questionContainer').removeChild(document.getElementById('flipBeginSurvey'));
		displayQuestion();
	}

	var compteur = 1;
	
    function displayQuestion() {
        
    	var question = document.getElementById("surveyQuestion");
    	var answer = document.getElementById("surveyAnswer");
    	
		if (compteur==1) {
			<?php $q=$questions[1];?>
	    	question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
	    	
		} else if (compteur==2) {
			<?php $q=$questions[2];?>
			question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
	    	
		} else if (compteur==3) {
			<?php $q=$questions[3];?>
			question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
			
		} else if (compteur==4) {
			<?php $q=$questions[4];?>
			question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
			
		} else if (compteur==5) {
			<?php $q=$questions[5];?>
			question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
			
		} else if (compteur==6) {
			<?php $q=$questions[6];?>
			question.innerHTML="<?php echo $q[1];?>";
	    	<?php $r=$q[2];?>
	    	answer.innerHTML="<?php
	    	foreach ($r as $reponse) {
	    	    echo $reponse[2];
	    	    echo "<br>";
	    	}
	    	?>";
			
		} else {
	    	question.innerHTML="No more questions.";
	    	answer.innerHTML="Then no more answers too.";
		}

    	compteur++;
    }

    </script>

</body>
</html>