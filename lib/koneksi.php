<?php
$host = 'localhost';
$db = 'chat_app'; // Make sure this database exists
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Database connection successful.";
} catch (PDOException $e) {
    if ($e->getCode() == 1049) {
        die("Database '$db' does not exist. Please create the database or check the name.");
    } else {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
