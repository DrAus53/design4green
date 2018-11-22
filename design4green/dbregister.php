<?php
$servername = "localhost";
$username = "damien";
$password = "brocos";
$dbname = "brocosurvey";
$msgFunc = "fail"

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$stmtInsert = $conn->prepare("SELECT id, type_reponse, valeur FROM Question");
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>