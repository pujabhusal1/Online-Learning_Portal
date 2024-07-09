<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <style>
        /* Custom Navbar Styling */
        .navbar-custom {
            background-color: #007bff; /* Dark blue color */
        }

        /* Background Image for Body */
        body {
            background-image: url('image/background.jpg'); /* Adjust the path to your image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            overflow-x: hidden;
            color: #333; /* Default text color */
        }

        .centered-text {
            padding: 160px;
            border-radius: 40px;
            text-align: center;
            /* background-color: rgba(255, 255, 255, 0.8); Semi-transparent white background */
            color: Gray; /* Red text color */
        }

        /* Custom Footer Styling */
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <title>Online Learning</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Learning Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                <a class="nav-link" href="courses.php">Courses</a>
                <a class="nav-link" href="#">Register</a>
                <a class="nav-link" href="#">Login</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav>

<div class="centered-text">
    <h1>Online Learning </h1>
    <p>Enhance your knowledge from our courses provided on this website and make your future bright.</p>
</div>

<footer>
    <p>&copy; 2024 Online Learning Portal. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
