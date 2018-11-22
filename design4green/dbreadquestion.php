<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator
{

    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

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
    while ($donnesQuestion = $stmtQuestion->fetch()) {
        $idQ = $donnesQuestion['id'];
        $stmtReponse = $conn->prepare("SELECT id, id_quest_suiv, valeur, champ_select, champ_texte FROM Response WHERE id_question=" + $idQ);
        $stmtReponse->execute();
        $reponses = [];
        
        $result = $stmtReponse->setFetchMode(PDO::FETCH_ASSOC);
        while ($donnesReponse = $stmtReponse->fetch()) {
            //$reponses[] = array($donnesReponse['id'], $donnesReponse['id_quest_suiv'], $donnesReponse['valeur'], $donnesReponse['champ_select'], $donnesReponse['champ_texte']);
        }
        $questions[$idQ] = array($donnesQuestion['type_reponse'], $donnesQuestion['valeur'],  $reponses);
    }
    echo $questions;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>