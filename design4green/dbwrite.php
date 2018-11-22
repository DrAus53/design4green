<?php

$servername = "localhost";
$username = "damien";
$password = "brocos";
$dbname = "brocosurvey";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmtQuestion = $conn->prepare("SELECT id, type_reponse, valeur FROM Question");
    $stmtQuestion->execute();
    
    $questions = array();
    // set the resulting array to associative
    $result = $stmtQuestion->setFetchMode(PDO::FETCH_ASSOC);
    $state = "init";
    $reponsePreced = "";
    while ($donnesQuestion = $stmtQuestion->fetch()) {
        $idQ = $donnesQuestion['id'];
        $requete = "SELECT id, id_quest_suiv, valeur, champ_select, champ_texte FROM Reponse WHERE id_question=".$idQ;
        $stmtReponse = $conn->prepare($requete);
        $stmtReponse->execute();
        $reponses = [];
        echo '<br/>'."\n";
        echo $donnesQuestion['valeur'];
        echo '<br/>'."\n";
        echo '<br/>'."\n";
        $result = $stmtReponse->setFetchMode(PDO::FETCH_ASSOC);
        while ($donnesReponse = $stmtReponse->fetch()) {
            $reponses[] = array(
                $donnesReponse['id'],
                $donnesReponse['id_quest_suiv'],
                $donnesReponse['valeur'],
                $donnesReponse['champ_select'],
                $donnesReponse['champ_texte']);
            
            if ($donnesReponse['champ_select']==null) {
                echo '&nbsp';
                echo '<input type="checkbox" name="test" value="value">';
                echo $donnesReponse['valeur'];
                echo '<br/>'."\n";
            }
            else {
                echo '&nbsp';
                if ($reponsePreced!=$donnesReponse['valeur']) {
                    echo '&nbsp';
                    echo $donnesReponse['valeur'];
                    echo '<br/>'."\n";
                    echo '&nbsp';
                    $reponsePreced=$donnesReponse['valeur'];
                }
                echo '<input type="checkbox" name="test" value="value">';
                echo '&nbsp';
                echo $donnesReponse['champ_select'];
                echo '<br/>'."\n";
            }
        }
        $questions[$idQ] = array(
            $donnesQuestion['type_reponse'],
            $donnesQuestion['valeur'],
            $reponses
        );
    }
    echo $questions;
} catch (PDOException $e) {
    echo $state + "\n";
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>