<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test02";

$mentorName = $_GET['mentor_name'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, rollno, defaulter_type FROM defaulter_data WHERE mentor_name = '$mentorName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Roll No</th><th>Defaulter Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["rollno"] . "</td>";
        echo "<td>" . $row["defaulter_type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No records found for mentor: $mentorName</p>";
}

$conn->close();
?>
