<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
    <h2>Product Toevoegen</h2>
    <form method="post" action="insert.php">

        <label for="product_naam">Product naam:</label><br>
        <input type="text" name="product_naam" required><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label><br>
        <input type="number" name="prijs_per_stuk" step="0.01" required><br>

        <label for="omschrijving">Omschrijving:</label><br>
        <textarea name="omschrijving" required></textarea><br>

        <input type="submit" value="Toevoegen">

    </form>
</body>
</html>

<?php

$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];


    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?)";
    
    
    $result=$pdo->prepare($sql);
//$gegevensformulier = array($product_naam, $prijs_per_stuk, $omschrijving);
    $result->execute([$product_naam, $prijs_per_stuk, $omschrijving]);

}




?>



    