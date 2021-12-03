<?php
$servername = "localhost";
$username = "jeanpierre";
$password = "2200207476";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE informacion";
if($conn->query($sql)===TRUE){
    echo "Connected successfully";
}else{
    echo "Error creating database: ". $conn->error;
}
$conn->close();
?>


