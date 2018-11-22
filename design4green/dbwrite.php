<!DOCTYPE html>

<html>
<head>
</head>
<body>

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

?>

<script>
function sendSurveyResult() {
    var msgFunc = "<?php echo registerSurveyResult($conn);?>"
    document.getElementById("surveySaveLink").innerHTML = "Use this link to fill the survey later : http://vps612249.ovh.net/"+msgFunc+".php";
}
</script>

</body>
</html>