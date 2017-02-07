<?php 
$servername = "localhost";
$username = "bart_lees";
$password = "lezen";

try {
    $conn = new PDO("mysql:host=$servername;dbname=brainwars_highscore", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


//$conn = null;    
 ?>
