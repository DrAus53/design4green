<!DOCTYPE html>
<html>

<head>

<?php
include ('dbread.php');
?>

<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/test.css" rel="stylesheet">
<title>Brocos Team Survey</title>

</head>

<body>

	<div id="header" class="row">
		<div class="header">
			<h2 class="title">Green IT Alliance Survey by Brocos Team</h2>
		</div>
	</div>

	<div id="contain" class="row">
		<form class="quizz">
			<div id="questionContainer">

				<div id="description">
					<h4>Introduction</h4>
					<p>The Green IT Alliance publish a survey every two years to assess
						the maturity of French companies in setting up eco-responsible
						digital services. This survey is distributed by the AGIT and all
						its partners for 3 months from 1 January to 31 March. It consists
						of different questions that reflect the 8 major themes of Green
						IT.
    					<ul>
    						<li>I.T. Infrastructures</li>
    						<li>Data Center</li>
    						<li>Purchases</li>
    						<li>Workstations</li>
    						<li>Equipment End of Life</li>
    						<li>Governance</li>
    						<li>Printing</li>
    						<li>Applications</li>
    					</ul>
					The responses of the survey are then collected, weighted, compiled
					and analyzed, leading to the creation of a detailed report.
					</p>
				</div>

				<div id="flipBeginSurvey">
					<p class="flip" onclick="beginSurvey()">Let's do this !</p>
				</div>

				<div id="surveyQuestion"></div>

				<div id="surveyAnswer"></div>

				<div id="surveyNext" style="visibility: hidden">
					<p class="flip" onclick="displayQuestion()">Next Question</p>
				</div>
				
				<div id="conclusion" style="display: none">
					<p>We thank you for your participation in this study.</p>
				</div>

			</div>
		</form>
	</div>

	<div id="footer" class="columns"
		style="margin-top: 5%; margin-left: 10%; margin-right: 10%";>
		<div class="text-center">
			<p>
				Realized by Emma MANSALIER, Damien MAYMARD, Gaëtan SCUILLER and
				Tanguy SUARD <br> <a href="http://alliancegreenit.org/">alliancegreenit.org</a>
			</p>
		</div>
	</div>

	<script>

	function beginSurvey() {
		document.getElementById('questionContainer').removeChild(document.getElementById('description'));
		document.getElementById('questionContainer').removeChild(document.getElementById('flipBeginSurvey'));
		document.getElementById('surveyNext').style.visibility = "visible";
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