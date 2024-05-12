<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username from the form data
    $username = $_POST["username"];

    // Redirect to fetch_student_records.php and pass the username as a URL parameter
    header("Location:user.php?username=" . urlencode($username));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .icon-square {
                width: 3rem;
                height: 3rem;
                border-radius: 17px;
        }
    </style>
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="Screenshot 2024-04-17 221400.png" alt="logo" height="30px" width="30px">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="features.html" class="nav-link px-2 text-white">Features</a></li>

              <li><a href="about.html" class="nav-link px-2 text-white">About</a></li>
            </ul>
    
            
          </div>
        </div>
      </header>
      <div class="container"><div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Displine Defaulter Tracking System</h1>
          
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form id="loginForm" class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post">
            <div class="form-floating mb-3">
              <input type="text" id="username" name="username" class="form-control" >
              <label for="username">USER NAME</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button id="submitButton" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          </form>
        </div>
      </div>
      
      <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Features</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-btn-fill" viewBox="0 0 16 16">
                    <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m8-1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Incident recording</h3>
              <p>Effortlessly record and manage disciplinary incidents with our intuitive incident recording feature.</p>
              
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Report generation</h3>
              <p>Instantly create detailed reports to monitor student disciplinary trends and address concerns effectively.</p>
              
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                    <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1z"/>
                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Real-Time Notifications</h3>
              <p> Stay informed instantly with our real-time notification system, keeping you updated on disciplinary incidents and student activities as they occur.</p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 text-center">
        
        <h2>Description:</h2>
        <p class="lead">The Discipline Defaulter Tracking System website is a comprehensive platform designed to streamline disciplinary management within educational institutions. It offers user authentication for administrators, teachers, and mentors, enabling secure access to pertinent information. The system facilitates incident recording, allowing users to document disciplinary infractions with relevant details. It also supports the maintenance of student profiles, ensuring accurate tracking of disciplinary history. Robust tracking and reporting functionalities empower users to analyze trends, identify repeat offenders, and implement targeted interventions. With features for notifications and communication, the system fosters collaborative efforts in resolving disciplinary issues promptly. Built on a robust technology stack, this website provides a user-friendly interface, ensuring efficient and effective disciplinary management for educational stakeholders.
        </p>
      </div>
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">© 2024 DISCIPLINE COMMITY, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="features.html" class="nav-link px-2 text-body-secondary">Features</a></li>

            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
        </footer>
      </div>
    
    <script>
    document.getElementById("submitButton").addEventListener("click", function() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username === "ADMIN" && password === "1405") {
            window.location.href = "admin.php";
        } else {
            window.location.href = "user.php";
        }
    });
    </script>
</body>
</html>
