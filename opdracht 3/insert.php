<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="naam" placeholder="Product Naam"><br>
            <input type="number" name="prijs" placeholder="Prijs Per Stuk"><br>
            <input type="text" name="omschrijving" placeholder="Omschrijving"><br>
            <button type="submit" name="submit" >Versturen</button>
        </form>

        <?php
            include "class.php";

            if (isset($_POST["submit"])) {
                $name = $_POST["naam"];
                $prijs = $_POST["prijs"];
                $omschrijving = $_POST["omschrijving"];
    
                $query = "INSERT INTO producten (product_code, product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?,?)";
                $stmt= $conn->prepare($query);
                $stmt->execute([rand(1, 1000000), $name, $prijs, $omschrijving]);
                echo "<br/>verstuurd naar database";
            }
        ?>
    </body>
</html>
