<?php

?>

<!DOCTYPE html>
<html>
<style>
@charset "utf-8";


.title{
	font-size: 32px;
    line-height: 50px;
    text-align: center;
    margin-top:70px;
    text-shadow: 2px 2px 4px #000000;
    color:white;
}

.quizz{
	margin-top:50px;
	margin-left:10%;
	width:80%;
	height:400px;
}

.footer{
	margin-top:50px;
	height:100px;
}

.header{
	width:100%;
	height:200px;
	background-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 100%), url("logo.png");
	background-position: center;
	text-align:center;
}

.flip {
    font-size: 16px;
    padding: 10px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
    border: solid 1px #a6d8a8;
    margin: auto;
}
</style>
<head>

<?php include ('dbreadquestion.php') ;
$idQuestion = 1;
$question = $questions[$idQuestion];
$typeQuestion = $question[1];
$intituleQuestion = $question[2];
$reponseQuestion = $question[3];
$nbReponseQuestion = count($reponseQuestion);
 ?>
<meta charset="utf-8">
<title>Quizz</title>
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
		      		<span id="buttonNextDescription" onclick="changeQuestion()">"Let's do this ! :)"</span>
		    </div>
	</form>
	</div>
	<div id="footer">
		<div id="pied" class="footer" style="border-style:solid">
		<h1>Footer</h1>
		</div>
	</div>
</body>

<script>

function changeQuestion() {
	if(document.getElementById('description') != null){
		console.log(document.getElementById('buttonNextDescription'));
		document.getElementById('buttonNextDescription').innerHTML = "Next !";
		document.getElementById('questionContainer').removeChild(document.getElementById('description'));
		createQuestion(<?php echo $idQuestion?>
	}
	else if(document.getElementById('question') != null){
		document.getElementById('questionContainer').removeChild(document.getElementById('question'));
		createQuestion(<?php echo $idQuestion?>);
	}	
}

function createQuestion(id){
	if(<?php echo $typeQuestion?> == "multiple_choice"){
		createMultipleQuestion();
	}
	if(<?php echo $typeQuestion?> == "single_choice"){
		createMultipleQuestion();
	}
	if(<?php echo $typeQuestion?> == "multiple_response"){
		createMultipleQuestion();
	}
	if(<?php echo $typeQuestion?> == "value"){
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
	while (<?php $nbReponseQuestion?> !=0){
		  createMultipleChoiceRep(<?php $nbReponseQuestion?>);
		  <?php $nbReponseQuestion--?>;
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
	<?php $nbReponseQuestion++?>;
	}

</script>
</html>

