<?php
?>

<!DOCTYPE html>
<html>
<head>
<?php

include ('dbread.php');
$idQuestion = 1;
$question = $questions[$idQuestion];
$typeQuestion = $question[0];
$intituleQuestion = $question[1];
$reponseQuestion = $question[2];
$nbReponseQuestion = count($reponseQuestion);
?>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/test.css" rel="stylesheet">
<title>Formulaire</title>
</head>
<body>
	<div id="header" class="row">
		<div class="header">
			<h2 class="title">Baromètre des pratiques Green IT des entreprises en
				France 2018</h2>
		</div>
	</div>
	<div id="contain" class="row">
		<form class="quizz">
			<div id="questionContainer">
				<div id="description">
					<h4>Description :</h4>
					</br>
					<p>L’alliance Green IT diffuse tous les deux ans un questionnaire
						afin d’évaluer la maturité des entreprises françaises en matière
						de mise en place de services numériques écoresponsables. Ce
						questionnaire est diffusé par l’AGIT et l’ensemble de ses
						partenaires durant 3 mois, du 1er janvier au 31 mars. Il se
						compose de différentes questions qui reprennent les 8 grandes
						thématiques du Green IT – Les infrastructures informatiques, le
						datacenter, les achats, les postes de travail, la fin de vie des
						équipements, la gouvernance, l’impression et les applications. Les
						réponses du questionnaire sont ensuite collectées, pondérées,
						compilées et analysées, donnant lieu à la création d’un Rapport
						détaillé.</p>
				</div>
			</div>
			</br>
			<div class="flip" id="buttonNext">
				<p id="buttonNextDescription" onclick="changeQuestion()">Let's do
					this !</p>
			</div>
		</form>
		<form>
			<div id="questionultiple">
				<fieldset>
					<div id="questionn">sucess</div>
 		 <?php $q=$questions[5];?>
    		  <p class="flip" onclick="myFunction(5)">Question suivantes</p>
					<input type="radio" id="o" name="interest" value="idDeLaReponse">
					--> <label for='o'> </label>
				</fieldset>
			</div>

			<div id="question">
			</div>
		
		</form>
		<footer>
			<div id="footer" class="columns"
				style="margin-top: 5%; margin-left: 10%; margin-right: 10%";>
				<div class="text-center">
					<p>
						Realized by Emma MANSALIER, Damien MAYMARD, Gaëtan SCUILLER and
						Tanguy SUARD <br> <a href="http://alliancegreenit.org/">alliancegreenit.org</a>
					</p>
				</div>
			</div>
		</footer>
	</div>
</body>

<script type="text/javascript">

function changeQuestion() {
	if(document.getElementById('description') != null){
		document.getElementById('buttonNextDescription').innerHTML = "Next !";
		document.getElementById('questionContainer').removeChild(document.getElementById('description'));
		createQuestion(<?php $idQuestion?>);
	}
	else if(document.getElementById('question') != null){
		document.getElementById('questionContainer').removeChild(document.getElementById('question'));
		createQuestion(<?php $idQuestion?>);
	}	
}

function createQuestion(id){
	if("<?php echo $typeQuestion?>" == 'multiple_choice'){
		createMultipleQuestion();
	}
	if("<?php echo $typeQuestion?>" == 'single_choice'){
		createMultipleQuestion();
	}
	if("<?php echo $typeQuestion?>" == 'multiple_response'){
		createMultipleQuestion();
	}
	if("<?php echo $typeQuestion?>" == 'value'){
		createMultipleQuestion();
	}
}

function createMultipleQuestion(){
	var questionContainer = document.getElementById('questionContainer');
	var divQuestion = document.createElement("div");
	divQuestion.id = "question";
	divQuestion.style = "hidden";
	var labelQuestion = document.createElement("h4");
	var textLabel = document.createTextNode("Question 1");
	labelQuestion.appendChild(textLabel);
	labelQuestion.setAttribute("id", "labelQuestion");
	var sautLigne = document.createElement("br");
	divQuestion.appendChild(labelQuestion);
	divQuestion.appendChild(sautLigne);
	questionContainer.appendChild(divQuestion);
	for (var i= 0; i < <?php echo $nbReponseQuestion?> ; i++){
		  createMultipleChoiceRep(<?php $nbReponseQuestion?>);
	}
}

function createMultipleChoiceRep(compteur){
	var question = document.getElementById('question');
	console.log(question);
	var divRep = document.createElement("div");
	divRep.id = "reponse"+compteur;
	var inputRep = document.createElement("input");
	inputRep.type = "checkbox";
	inputRep.name = ("checkbox"+compteur);
	inputRep.id = ("checkbox"+compteur);
	var labelRep = document.createElement('label');
	labelRep.htmlFor = "reponse"+compteur;
	labelRep.appendChild(document.createTextNode(<?php echo $reponseQuestion[$nbReponseQuestion]?>));
	divRep.appendChild(inputRep);
	divRep.appendChild(labelRep);
	question.appendChild(divRep);	
	<?php ++$nbReponseQuestion?>;
	}

document.getElementById("clickConclusion").onclick = afficher_conclusion();

function afficher_conclusion() {
	var conclusionContainer = document.getElementById("conclusion");
	var questioncontainer = document.getElementById("questionContainer");

	questioncontainer.style.display = "none";
	conclusionContainer.style.display = "block";
	}

function myFunction(id) {
	var typeQuestion =  "<?php echo $q[0];?>";
	if(typeQuestion=='single_choice'){
		alert(typeQuestion);
		createSingleChoice();
	} else if(typeQuestion=='value'){
		alert("value");
		createQuestionValue();
	}
}

function createQuestionValue(){
		var question = document.getElementById("question");
		var div = question.appendChild(document.createElement("div"));
		alert("<?php echo $q[1];?>");
		div.innerHTML="<?php echo $q[1];?>"	
		 	var divRep = question.appendChild(document.createElement("div"));		
			"<?php
			$reponses = $q[2];
            echo (count($q[2]));
            $tailleRep = count($reponses);
            ?>" ;
			for (var i=0; i<=<?php echo $tailleRep-1; ?>; i++) { 
				<?php echo $reponse=$reponses[i];?>
				alert("<?php echo $reponse[2];?>");
		 		var input = divRep.appendChild(document.createElement("input"));
		 		input.setAttribute("type", "text");
		 		input.setAttribute("id", <?php $idRep =  $reponse[0] + $reponse[1]; echo $idRep;?>);
		 		input.setAttribute("name", <?php echo $reponse[2]?>);
		 		alert( <?php echo $reponse[2]?>);
			}

}

</script>
</html>
