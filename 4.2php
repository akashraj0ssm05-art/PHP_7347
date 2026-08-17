<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to create table
    $sql = "CREATE TABLE Student (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        mobile VARCHAR(15)
    )";

    // Execute query
    $conn->exec($sql);

    echo "Table Student created successfully.";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
