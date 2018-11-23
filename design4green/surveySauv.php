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
			<h2 class="title">Green IT Alliance Survey</h2>
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
					<p class="flip" onclick="beginSurvey()">Let's do This !</p>
				</div>

				<div id="surveyQuestion"></div>

				<div id="surveyAnswer"></div>

				<div id="surveyNext" style="visibility: hidden">
					<p class="flip" onclick="displayQuestion()">Next Question</p>
				</div>
				
				<div id="flipEndSurvey" style="visibility: hidden">
					<p class="flip" onclick="endSurvey()">Send Survey</p>
				</div>

			</div>
		</form>
	</div>

	<footer class="footer">
		<p>
			Realized by Emma MANSALIER, Damien MAYMARD, Gaëtan SCUILLER and
			Tanguy SUARD <br> <a href="http://alliancegreenit.org/">alliancegreenit.org</a>
		</p>
	</footer>

	<script>

	function beginSurvey() {
		document.getElementById('questionContainer').removeChild(document.getElementById('description'));
		document.getElementById('questionContainer').removeChild(document.getElementById('flipBeginSurvey'));
		document.getElementById('surveyNext').style.visibility = "visible";
		displayQuestion();
	}

	function endSurvey() {
		document.getElementById("surveyQuestion").innerHTML="The survey as been submeted :)";
		document.getElementById("surveyAnswer").innerHTML="";
    	document.getElementById('questionContainer').removeChild(document.getElementById('flipEndSurvey'));
	}

	var compteur = 1;
	
    function displayQuestion() {
        
    	var question = document.getElementById("surveyQuestion");
    	var answer = document.getElementById("surveyAnswer");
    	
        if (compteur == 1) {
            <?php $q = $questions[1];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 2) {
            <?php $q = $questions[2];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 3) {
            <?php $q = $questions[3];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 4) {
            <?php $q = $questions[4];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 5) {
            <?php $q = $questions[5];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 6) {
            <?php $q = $questions[6];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                    echo $reponse[3];
                    echo "<br>";
                }
                ?>";
			compteur += 4;

        } else if (compteur == 11) {
            <?php $q = $questions[11];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 12) {
            <?php $q = $questions[12];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 13) {
            <?php $q = $questions[13];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 14) {
            <?php $q = $questions[14];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 15) {
            <?php $q = $questions[15];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 16) {
            <?php $q = $questions[16];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 17) {
            <?php $q = $questions[17];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";
                
        } else if (compteur == 18) {
            <?php $q = $questions[18];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                }
                ?>";
			compteur += 12;
                
        } else if (compteur == 31) {
            <?php $q = $questions[31];?>
            question.innerHTML = "<?php echo $q[31];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                }
                ?>";
			compteur += 7;

        } else if (compteur == 39) {
            <?php $q = $questions[39];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 40) {
            <?php $q = $questions[40];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 41) {
            <?php $q = $questions[41];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 42) {
            <?php $q = $questions[42];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 43) {
            <?php $q = $questions[43];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 44) {
            <?php $q = $questions[44];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 45) {
            <?php $q = $questions[45];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 46) {
            <?php $q = $questions[46];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 47) {
            <?php $q = $questions[47];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 48) {
            <?php $q = $questions[48];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 49) {
            <?php $q = $questions[49];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 50) {
            <?php $q = $questions[50];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                }
                ?>";
			compteur += 11;

        } else if (compteur == 62) {
            <?php $q = $questions[62];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 63) {
            <?php $q = $questions[63];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                }
                ?>";
			compteur += 6;

        } else if (compteur == 70) {
            <?php $q = $questions[70];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 71) {
            <?php $q = $questions[71];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 72) {
            <?php $q = $questions[72];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 73) {
            <?php $q = $questions[73];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";
        } else if (compteur == 74) {
            <?php $q = $questions[74];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 75) {
            <?php $q = $questions[75];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 76) {
            <?php $q = $questions[76];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 77) {
            <?php $q = $questions[77];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 78) {
            <?php $q = $questions[78];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                $reponsePreced = "";
                foreach ($r as $reponse) {
                    if ($reponsePreced !=$reponse[2]) {
                        echo $reponse[2];
                        echo "<br>";
                        $reponsePreced = $reponse[2];
                    }
                }
                ?>";
			compteur += 4;

        } else if (compteur == 83) {
            <?php $q = $questions[83];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 84) {
            <?php $q = $questions[84];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 85) {
            <?php $q = $questions[85];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 86) {
            <?php $q = $questions[86];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 87) {
            <?php $q = $questions[87];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";

        } else if (compteur == 88) {
            <?php $q = $questions[88];?>
            question.innerHTML = "<?php echo $q[1];?>";
            <?php $r = $q[2];?>
            answer.innerHTML = "<?php
                foreach ($r as $reponse) {
                    echo $reponse[2];
                    echo "<br>";
                }
                ?>";
			
		} else {
	    	question.innerHTML="We thank you for your participation in this study.";
	    	answer.innerHTML="The survey is finished :)";
	    	document.getElementById('questionContainer').removeChild(document.getElementById('surveyNext'));
	    	document.getElementById('flipEndSurvey').style.visibility = "visible";
		}

    	compteur++;
    }

    </script>

</body>
</html>