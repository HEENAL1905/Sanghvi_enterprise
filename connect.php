<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SanghviEnterprisedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE SanghviEnt_Query_Form (
Name VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Contact VARCHAR(20),
Product VARCHAR(50),
Query VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Form created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>