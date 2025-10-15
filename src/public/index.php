<?php
echo "ShopFast E-commerce Platform\n";
echo "Welcome to our online store!\n";

// Simulate database connection
try {
    $db_host = getenv('DB_HOST') ?: 'mysql';
    $db_name = getenv('DB_NAME') ?: 'shopfast';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASSWORD') ?: 'password';
    
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    echo "Database: Connected successfully\n";
} catch (PDOException $e) {
    echo "Database: Connection failed - " . $e->getMessage() . "\n";
}

// Display environment info
echo "Environment: " . (getenv('APP_ENV') ?: 'development') . "\n";
echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "\n";
?>
