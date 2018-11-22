<?php

?>

<!DOCTYPE html>
<html>
<head>
<?php include ('dbread.php') ;
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
			<h2 class="title">
				Baromètre des pratiques Green IT des entreprises en France 2018
			</h2>
		</div>
	</div>
	<div id="contain" class="row">
		<form class="quizz">
			<div id="questionContainer">
			    <div id="description">
			      <h4>Description :</h4>
			      </br>
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
			</div>
			</br>
			<div class="flip" id="buttonNext">
		      		<p id="buttonNextDescription" onclick="changeQuestion()">
		      		Let's do this !
		      		</p>
		    </div>
	</form>
	</div>
	<div id="footer">
		<div id="pied" class="footer" style="border-style:solid">
		<h1>Footer</h1>
		</div>
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
	var textLabel = document.createTextNode("<?php echo $question[$idQuestion]?>");
	labelQuestion.appendChild(textLabel);
	labelQuestion.setAttribute("id", "labelQuestion");
	var sautLigne = document.createElement("br");
	divQuestion.appendChild(labelQuestion);
	divQuestion.appendChild(sautLigne);
	questionContainer.appendChild(divQuestion);
	for (var i= 1; i <= <?php echo $nbReponseQuestion?> ; i++){
		<?php echo console.log()?>
		console.log("<?php $rep=$question[i]; $val=$rep[2]; echo $val?>");
		  createMultipleChoiceRep();
	}
}

function createMultipleChoiceRep(){
	var compteur = 1;
	var question = document.getElementById('question');
	var divRep = document.createElement("div");
	divRep.id = "reponse"+compteur-1;
	var inputRep = document.createElement("input");
	inputRep.type = "checkbox";
	inputRep.name = ("checkbox"+compteur-1);
	inputRep.id = ("checkbox"+compteur);
	var labelRep = document.createElement('label');
	labelRep.htmlFor = "reponse"+compteur-1;
	var intitule = document.createTextNode("coucou");
	labelRep.appendChild(document.createTextNode("coucou"));
	divRep.appendChild(inputRep);
	divRep.appendChild(labelRep);
	question.appendChild(divRep);
	}

</script>
</html>
