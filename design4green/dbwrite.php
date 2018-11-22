<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/test.css" rel="stylesheet">
<title>Brocos Team Survey</title>
</head>
<body>

	<div id="header" class="row">
		<div class="header">
			<h2 class="title">Baromètre des pratiques Green IT des entreprises
				en France 2018</h2>
		</div>
	</div>
	<div id="contain" class="row">
		<form class="quizz">
			<div id="questionContainer">
				<div id="description">
					<h4>Description :</h4>
					<p>L’alliance Green IT diffuse tous les deux ans un questionnaire
						afin d’évaluer la maturité des entreprises françaises en
						matière de mise en place de services numériques
						écoresponsables. Ce questionnaire est diffusé par l’AGIT et
						l’ensemble de ses partenaires durant 3 mois, du 1er janvier au
						31 mars. Il se compose de différentes questions qui reprennent
						les 8 grandes thématiques du Green IT – Les infrastructures
						informatiques, le datacenter, les achats, les postes de travail,
						la fin de vie des équipements, la gouvernance, l’impression et
						les applications. Les réponses du questionnaire sont ensuite
						collectées, pondérées, compilées et analysées, donnant lieu
						à la création d’un Rapport détaillé.</p>
				</div>
			</div>
			<div class="flip" id="buttonNext">
				<p id="buttonNextDescription" onclick="changeQuestion()">Let's do
					this !</p>
			</div>

            <?php
            echo '<br/>' . "\n";
            echo '<center><strong>Brocos Team Survey</strong>';
            echo '<br/>' . "\n";
            echo '<br/>' . "\n";
            ?>
            
            <button onclick="sendSurveyResult()">Save it</button>
			<p id="surveySaveLink"></p>
            	
            <?php

            echo '</center><br/>' . "\n";

            $servername = "localhost";
            $username = "damien";
            $password = "brocos";
            $dbname = "brocosurvey";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmtQuestion = $conn->prepare("SELECT id, type_reponse, valeur FROM Question");
                $stmtQuestion->execute();
                $state = "init";
                $reponsePreced = "";
                while ($donnesQuestion = $stmtQuestion->fetch()) {
                    $idQ = $donnesQuestion['id'];
                    $requete = "SELECT id, id_quest_suiv, valeur, champ_select, champ_texte FROM Reponse WHERE id_question=" . $idQ;
                    $stmtReponse = $conn->prepare($requete);
                    $stmtReponse->execute();
                    echo '<br/>' . "\n";
                    echo '<strong>' . $donnesQuestion['valeur'] . '</strong>';
                    echo '<br/>' . "\n";
                    echo '<br/>' . "\n";
                    while ($donnesReponse = $stmtReponse->fetch()) {
                        if ($donnesReponse['champ_select'] == null) {
                            echo '&nbsp';
                            echo '<input type="checkbox" name="test" value="value">';
                            echo $donnesReponse['valeur'];
                            echo '<br/>' . "\n";
                        } else {
                            echo '&nbsp';
                            if ($reponsePreced != $donnesReponse['valeur']) {
                                echo '&nbsp';
                                echo $donnesReponse['valeur'];
                                echo '<br/>' . "\n";
                                echo '&nbsp';
                                $reponsePreced = $donnesReponse['valeur'];
                            }
                            echo '<input type="checkbox" name="test" value="value">';
                            echo '&nbsp';
                            echo $donnesReponse['champ_select'];
                            echo '<br/>' . "\n";
                        }
                    }
                    echo '<br/>' . "\n";
                }
            } catch (PDOException $e) {
                echo $state + "\n";
                echo "Error: " . $e->getMessage();
            }

            function registerSurveyResult($conn)
            {
                $randomTitle = "save" . rand(1000, 9999);
                try {
                    $stmtInsert = $conn->prepare("INSERT INTO Questionnaire(titre) VALUES ('" . $randomTitle . "')");
                    $stmtInsert->execute();
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                return $randomTitle;
            }

            $conn = null;

            ?>

		</form>
	</div>

	<script>
    function sendSurveyResult() {
        var msgFunc = "<?php echo registerSurveyResult($conn);?>"
        document.getElementById("surveySaveLink").innerHTML = "Use this link to fill the survey later : http://vps612249.ovh.net/"+msgFunc+".php";
    }
    </script>

</body>
</html>