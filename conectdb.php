<?php
    $username = "root"; 
    $password = "";     
    $server   = "localhost";   
    $dbname   = "wordpress"; 
    try {
        $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {
        echo "Error!!! " . $e->getMessage();
    }
?>