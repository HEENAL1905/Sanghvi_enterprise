<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "SanghviEnterprisedb";

// Create connection
$conn = new mysqli("$servername", "$username","$password","$dbname");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$email=$contact=$product=$query="";

$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$product =$_POST["product"];
$query=$_POST["query"];


  $sql = "INSERT INTO SanghviEnt_Query_Form (name, email, contact, product, query)
  VALUES ('$name','$email','$contact','$product','$query')";
if ($conn->query($sql) === TRUE) header("Location:index.html") 

?>