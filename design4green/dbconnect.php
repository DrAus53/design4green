<?php
$servername = "localhost";
$username = "damien";
$password = "brocos";
$dbname = "brocosurvey";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully.";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>