<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mentor Dashboard</title>
<link rel="stylesheet" href="user.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Submit form data using AJAX
    $('#mentor-form').submit(function(e){
        e.preventDefault(); // Prevent default form submission
        $.ajax({
            type: 'POST',
            url: 'connect.php',
            data: $('#mentor-form').serialize(), // Serialize form data
            success: function(){
                $('#success-message').text('Record added successfully'); // Display success message
                $('#mentor-form')[0].reset(); // Clear form fields
                setTimeout(function(){
                    $('#success-message').text(''); // Clear success message after 3 seconds
                }, 3000);
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText); // Log error message
                alert('Error occurred. Please try again.'); // Show error message
            }
        });
    });
});
</script>
</head>
<body>
<div class="container">
    <h1>Welcome, <span id="mentor-name">Mentor</span>!</h1>
    <div class="form-container">
        <form id="mentor-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rollno">Roll No:</label>
                <input type="text" id="rollno" name="rollno" required>
            </div>
            <div class="form-group">
                <label for="defaulter-type">Defaulter Type:</label>
                <select id="defaulter-type" name="defaulter-type" required>
                    <option value="Attendance">Attendance</option>
                    <option value="Discipline">Discipline</option>
                    <option value="Both">Both</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mentor-name">Mentor Name:</label>
                <input type="text" id="mentor-name" name="mentor-name" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        <span id="success-message" style="color: green;"></span> <!-- Display success message here -->
    </div>
    <div class="defaulter-list">
        <h2>Today's Defaulter List</h2>
        <ul id="defaulter-data">
            <?php
            // Database connection parameters
            $servername = "localhost"; // Change this to your database server name
            $username = "root"; // Change this to your database username
            $password = ""; // Change this to your database password
            $dbname = "test02"; // Change this to your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve all records from the database
            $sql = "SELECT * FROM defaulter_data";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<li>Name: " . $row["name"]. " - Roll No: " . $row["rollno"]. " - Defaulter Type: " . $row["defaulter_type"]. "</li>";
                }
            } else {
                echo "<li>No records found</li>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </ul>
    </div>
    <div class="logout-container">
        <a href="index.php" class="logout-btn">Logout</a>
    </div>
</div>
</body>
</html>
