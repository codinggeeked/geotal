<?php
// Set the database connection parameters
$host = 'localhost'; // Change to your host, e.g., 'localhost' or IP address
$dbname = 'geotal';  // Database name
$username = 'root';  // Your database username
$password = '';  // Your database password

// Set the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    // Create a new PDO instance and set error mode to exception
    $pdo = new PDO($dsn, $username, $password);
    
    // Set the PDO error mode to exception (optional but recommended for debugging)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optionally, you can also set the default fetch mode to associative arrays
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Uncomment the next line to test if the connection was successful
    // echo "Connected successfully to the database.";

} catch (PDOException $e) {
    // Catch any errors and display a message
    die("Connection failed: " . $e->getMessage());
}
?>
