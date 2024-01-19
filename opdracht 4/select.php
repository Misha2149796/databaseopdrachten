<?php
    $servername = "localhost";
    $username = "root";
    $password = "Misha1112";
    $database = "winkel";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo "De connectie is gelukt!";
    } catch (PDOException $e) {
        echo "Connectie gefaald!". $e->getMessage();
    }

    $query = "select * from winkel";
    $statement = $conn->query($query);
    $results = $statement->fetchAll();

    foreach($results as $result) {
        echo $result["Name"] . "<br/>";
    }

    // Hoe je een single row selecteert met placeholders
    $stmt = $conn->prepare("SELECT * FROM medewerkers WHERE product_code=1");
    $stmt->execute();

    echo $stmt;

    // Hoe je een single row selecteert met named parameters
    $stmt = $conn->prepare("SELECT * FROM medewerkers WHERE product_code=2");
    $stmt->execute();

    echo $stmt;
?>
