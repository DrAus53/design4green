<!DOCTYPE html>

<html>
<head>
<?php include ('dbreadquestion.php') ;
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
<p onclick="myFunction()"></p>
<form>
 <div id="questionultiple">
 
 	 <fieldset>
 		 <div id="questionn">sucess</div>
    		  <p class="flip" onclick="myFunction(1)">Question suivante</p>
    		   <input type="radio" id="o" name="interest" value="idDeLaReponse">  -->
   			    <label for='o'> </label>		    
    </fieldset>
  </div>
    
<div id="question">
 

</form>
<script>
function myFunction(id) {
	alert(id);
	var test = "<?php echo $q[0] ;?>"
	if(test=="single_choice"){
		
		createSingleChoice();
	}
}

function createSingleChoice(){
	document.getElementById('questionultiple').removeChild(document.getElementById('questionn'));
	var question = document.getElementById("question");
	var div = question.appendChild(document.createElement("div"));
	div.innerHTML="<?php echo $q[1];?>"
	
	var divRep = question.appendChild(document.createElement("div"));
	
	var input = divRep.appendChild(document.createElement("input"));
	input.type="radio"
	var label=input.appendChild(document.createElement("label"));
	label.innerHTML="yes"
		


}

</script>
</body>
</html>
