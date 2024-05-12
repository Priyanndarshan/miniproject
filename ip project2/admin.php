<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="admin.css"> <!-- Include your CSS file -->
<style>
/* Advanced CSS styles */
body {
    
    font-family: Arial, sans-serif;
    background-color: #c8b2dd;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.filter-container {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 10px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    display: inline-block;
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #45a049;
}

.filtered-records {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    .container {
        padding: 10px;
    }

    h1 {
        font-size: 24px;
    }

    input[type="text"] {
        font-size: 14px;
    }

    .btn {
        font-size: 14px;
        padding: 8px 16px;
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Filter records based on mentor name
    $('#filter-form').submit(function(e){
        e.preventDefault(); // Prevent default form submission
        var mentorName = $('#mentor-name').val(); // Get mentor name from input field
        $.ajax({
            type: 'GET',
            url: 'filter_records.php', // PHP file to handle filtering
            data: { mentor_name: mentorName }, // Pass mentor name as URL parameter
            success: function(data){
                $('#filtered-records').html(data); // Update filtered records
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
    <h1>Welcome to Admin Dashboard</h1>
    <div class="filter-container">
        <form id="filter-form">
            <div class="form-group">
                <label for="mentor-name">Filter by Mentor Name:</label>
                <input type="text" id="mentor-name" name="mentor-name" required>
            </div>
            <button type="submit" class="btn">Filter</button>
        </form>
    </div>
    <div class="filtered-records" id="filtered-records">
        <!-- Filtered records will be populated dynamically -->
    </div>
</div>
</body>
</html>
