<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
    <h2>Product Toevoegen</h2>
    <form method="post" action="insert.php">

        <label for="product_naam">Product naam:</label>
        <input type="text" name="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" name="prijs_per_stuk" step="0.01" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" required></textarea><br><br>

        <input type="submit" value="Toevoegen">

    </form>
</body>
</html>

<?php

// Verbinding maken met de database
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "localhost=$host;winkel;=$db;charset=$charset";

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

>
