<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "ruwathi"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
//student
$name = $_POST['name'];
$mobile = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['mess'];


$sql1 = "INSERT INTO Message (name,mobile_no,email,messages) VALUES
                            ('$name','$mobile','$email','$message')";

$result1 = $conn->query($sql1); 

if ($result1===true) {
    
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>