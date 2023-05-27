<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    




<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" required><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam" required><br>

        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" id="leeftijd" required><br>

        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Verzenden">
    </form>
    
    </body>
    </html>