<?php
$host = 'localhost';
$dbname = 'olp'; // Replace with your actual database name
$username = 'email'; // Replace with your actual MySQL username
$password = 'password'; // Replace with your actual MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}
?>
