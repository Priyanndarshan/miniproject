<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "test02"; // Change this to your database name

// Retrieve form data
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$defaulterType = $_POST['defaulter-type'];
$mentorName = $_POST['mentor-name']; // Add mentor name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO defaulter_data (name, rollno, defaulter_type, mentor_name) 
        VALUES ('$name', '$rollno', '$defaulterType', '$mentorName')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully"; // Response to AJAX call
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
