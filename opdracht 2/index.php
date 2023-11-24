<?php
    $servername = "localhost";
    $username = "root";
    $password = "Misha1112";
    $database = "world";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        echo "Connected to database ".$database;
    } catch (PDOException $e) {
        echo "Connectie gefaald!". $e->getMessage();
    }
?>