<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="GET" action="">
            <input type="text" name="firstnamename" placeholder="Naam" required><br>
            <input type="text" name="lastname" placeholder="Achternaam" required><br>
            <input type="number" name="age" placeholder="Leeftijd" required><br>
            <input type="text" name="adress" placeholder="Adres" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="submit" name="submit" value="Verstuur">
        </form>

        <?php 

            if ((isset($_GET["submit"]))) {
                echo "<br/>";

                foreach ($_GET as $key => $value) {
                    if ($key != "submit") {
                        echo $key.": ".$value."<br/>";
                    }
                }
            }
        ?>
    </body>
</html>