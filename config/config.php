<?php
// the username.DbName and password are defined in env.config.php file
$require_once('env.config.php');

$servername = "localhost";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>