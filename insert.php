<?php

// Verbinding maken met de database
$host = 'localhost:3307';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';



$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op fouten bij het maken van de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// De tekst weergeven
echo "Connected to database ($dbname).";

// Verbinding sluiten
$conn->close();

?>