<!DOCTYPE html>

<html>
<head>
<?php ('dbreadquestion.php') ;
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

#panel,#question2,#question3 {
    display: none;
}
</style>
</head>
<body>
<p onclick="myFunction()"><?php $questions ?></p>

<form>


 <div id="questionmultiple">
  <fieldset>
  <div id="question">Question °1 : </div>
   
      <input type="radio" id="question" name="interest" value='$test'>
      <label for="coding">tet</label>
     
    <div>
      <input type="radio" id="question" name="interest" value="IdDeLaReponse">
      <label for="music">Non</label>
    </div>
    <div>
      <p class="flip" onclick='myFunction()'>Question suivante</p>
    </div>	
      </fieldset>
    </div>
<div id="value">
 	<fieldset>
  <legend> Question </legend> 
      <input type="text" id="coding" name="interest" value="idDeLaReponse">
      </fieldset>
    </div>	
    
<div id="questionm">
 <fieldset>
  <legend> Question °3 : </legend> 
     <div id="sq">
      <label> SQ </label>
      <input type="radio" id="o" name="interest" value="idDeLaReponse"> 
      <label for='o'> Oui </label>
      <input type="radio" id="o" name="interest" value="idDeLaReponse">
      <label for ='o'> No </label>
      <input type="radio" id="o" name="interest" value="idDeLaReponse">
      <label for='o'> NoIdea </label>
      </div>
      
      <div id="sq">
      <label> SQs </label>
      <input type="radio" id="o" name="interest" value="idDeLaReponse">
      <input type="radio" id="o" name="interest" value="idDeLaReponse">
      <input type="radio" id="o" name="interest" value="idDeLaReponse">
      </div>
      
     <div>
      <p class="flip" onclick="myFunction()">Question suivante</p>
      </div>
    
      </fieldset>
    </div>	  
</form>
<script>
function myFunction() {
	var response = document.getElementById("interest");	
	
	if(cliquer[i]){
		
		var nextReponse = cliquer.value;
		
	}
	if(nextReponse[1]=="multiple-response"){
		
		var node = document.getElementById("questionmultiple");
		
		for(int i=0;i<variableRecuperee[3].length;i++){		
			
			var newlabel = document.createElement("Label");
			newlabel.innerHTML = (next[2])[2];	
			node.innerHTML=newlabel.innerHTML;		
		}	
	}
	
	if(nextReponse[1]=="value"){
		
		var node = document.getElementById("questionmultiple");
		
		for(int i=0;i<variableRecuperee[3].length;i++){					
			var newlabel = document.createElement("Input");
			newlabel.innerHTML = '';	
			node.innerHTML=newlabel.innerHTML;		
		}	
	}
}
</script>
</body>
</html>
