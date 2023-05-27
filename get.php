<!DOCTYPE html>
<html>
<head>
    <title>Get</title>
</head>
<body>

    <form method="GET" action=" <?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="naam">Naam</label>
        <input type="text" name="name" placeholder="Naam" required> <br>

        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" placeholder="achternaam" required> <br>

        <label for="leeftijd">Leeftijd</label>
        <input type="number" name="leeftijd" placeholder="leeftijd" required> <br>

        <label for="adres">Adres</label>
        <input type="text" name="adres" placeholder="adres" required> <br>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email" required> <br>
        
        <input type="submit" value="Verzenden">
    </form>
