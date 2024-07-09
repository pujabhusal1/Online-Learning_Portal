<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Learning Portal - About Us</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('image/backgroundimage.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            overflow-x: hidden;
            color: #333;
        }

        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            position: relative;
            z-index: 1000;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }

        .container {
            padding-top: 80px;
            text-align: center;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            border-radius: 10px;
        }

        .about-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }

        .about-image {
            flex: 1;
            max-width: 100%;
            margin-right: 20px;
            border-radius: 10px;
        }

        .about-text {
            flex: 2;
            text-align: left;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            font-size: 12px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer-icons {
            font-size: 18px;
            margin: 0 10px;
            color: #fff;
        }

        .footer-text {
            margin-top: 3px;
        }

        .footer-text a {
            color: #fff;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Learning Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="navbar.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <div class="about-section">
            <img src="image/aboutus-image.jpg" alt="About Us Image" class="about-image">
            <div class="about-text">
                <h2>About Us</h2>
                <p>Welcome to the Online Learning Portal, your one-stop platform to enhance your knowledge and skills for a better future. We are committed to providing high-quality educational content and resources to learners around the globe.</p>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container text-center">
        <a href="tel:+123456789" class="footer-icons"><i class="fas fa-phone"></i></a>
        <span class="footer-text">info@example.com</span>
        <a href="mailto:info@example.com" class="footer-icons"><i class="fas fa-envelope"></i></a>
        <div class="footer-text">
            <span>&copy; 2024 Online Learning Portal. All rights reserved.</span>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
