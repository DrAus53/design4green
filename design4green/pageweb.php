<!DOCTYPE html>

<html>
<head>
<?php include ('dbread.php');
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
 		 <?php $q=$questions[1];?>
    		  <p class="flip" onclick="myFunction(1)">Question suivantes</p>
    		   <input type="radio" id="o" name="interest" value="idDeLaReponse">  -->
   			    <label for='o'> </label>		    
    </fieldset>
  </div>
 
<div id="question">
 

</form>
<script>
function myFunction(id) {
	alert(id);
	var test =  "<?php echo $q[0] ;?>"
	alert(test);
	if(test=='single_choice'){
		alert(test);
// 		createSingleChoice();
	}
}

function createSingleChoice(){
	
	var question = document.getElementById("question");
	var div = question.appendChild(document.createElement("div"));
	div.innerHTML="<?php echo $q[1];?>"
	
	var divRep = question.appendChild(document.createElement("div"));
	
	"<?php $f = $q[3];   
	   $tailleRep=count($f);
	?>";

	for (i=1; i<<?php echo $tailleRep; ?>; i++) { 
		var input = divRep.appendChild(document.createElement("input"));
		input.type="radio";
		input.innerHTML=<?php echo $f[i]; ?>
		
		var label=input.appendChild(document.createElement("label"));
		label.innerHTML="yes"
		var label=input.appendChild(document.createElement("label"));
		label.innerHTML="no"
	}
}

</script>
</body>
</html>
