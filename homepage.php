<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Sports Event</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            /* Light background color */
            margin: 0;
            padding: 0;
        }

        /* Navbar customization */
        .navbar {
            background-color: #008cba;
            /* Bright blue */
        }

        .navbar-nav a {
            color: red;
        }

        .navbar-brand {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #ff9900;
            /* Orange on hover */
        }

        /* Carousel styles */
        .carousel-inner img {
            width: 100%;
            height: 60vh;
            object-fit: cover;
        }

        .carousel-caption h3 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
            color: #fff;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            color: #fff;
        }

        /* About Section */
        .about-section {
            padding: 60px 0;
            background: linear-gradient(45deg, #ff6347, #ff8c00);
            /* Tomato and Orange */
            color: #fff;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.2rem;
            text-align: center;
            color: #fff;
        }

        /* Events Section */
        .events-section {
            padding: 60px 0;
            background-color: #e6f7ff;
            /* Light cyan background */
        }

        .events-section h2 {
            color: #008cba;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card-img-top {
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            color: #008cba;
            font-size: 1.5rem;
        }

        .card-text {
            color: #333;
        }

        /* Footer */
        .footer {
            background-color: #232f3e;
            /* Dark blue */
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .footer p {
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <!-- Header with Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Sports Event</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./homepage.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./admin_login.php">Admin</a>
                                <a class="dropdown-item" href="./hod_login.php">Hod</a>
                                <a class="dropdown-item" href="./faculty_login.php">Faculty</a>
                                <a class="dropdown-item" href="./student_login.php">Student</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./student_register.php"> Student Rigister</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Carousel Section -->
    <section id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./first.jpg" class="d-block w-100" alt="Sports Event 1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to the Annual Sports Event</h3>
                    <p>Join us for an exciting and fun-filled day of sports!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./90.jpg" class="d-block w-100" alt="Sports Event 2">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Team Spirit & Competitions</h3>
                    <p>Feel the adrenaline as teams compete for glory!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./football.avif" class="d-block w-100" alt="Sports Event 3">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Cheer for Your Favorite Team</h3>
                    <p>Be part of the crowd and support your team!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="text-center mb-4">ABOUT KASC</h2>
            <p class="lead">Kaamadhenu Arts and Science College is an institution of repute located on the outskirts of Sathyamangalam in the Erode – Sathyamangalam ( Bungalowpudhur ) stretch. Blessed with a salubrious weather and nestled in the luxuriance of greenness, the institution acts as a hive to all the knowledge seekers from different parts of the nation. Two decades have passed since laying the foundation stone by the illustrious chairman of Bannariamman Institute of Technology Shri.S.V.Balasubramaniam Avl. It was an initiation that fructified into buildings in a year and was declared open to the world by Thavathiru. Santhalinga Ramasamy Adigalar on 5th July 2001. The extensive 25 acre location is painted green with majestic trees and luscious shrubs. The rusting leaves resonates the sweet music of the mountaneous breeze and infuses the much needed energy to the young minds. The well equipped laboratories, the bright ventilated class rooms, the rich libraries, the expansive playground and a fertile atmosphere ignite the spark of learning in the young minds and takes them to greater heights. Discipline has been an indispensable quality of the institution that has transferred an ordinary student into an extraordinary talent. We cherish this virtue and we attribute the success of the past twenty summers to our Management, Principal and Staff Members. As future beckons, we are proud to march with renewed vigour and vitality to teach and place the students.</p>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events-section">
        <div class="container">
            <h2 class="text-center mb-4">Upcoming Events</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="height: 400px;width:300px">
                        <img src="./foot.jpg" class="card-img-top" alt="Football Match" style="height: 180px;">
                        <div class="card-body">
                            <h5 class="card-title">Football Match</h5>
                            <p class="card-text">Date: March 2, 2025<br>Venue: College Football Ground<br>Join us for an exciting football match featuring top teams from different departments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 400px;width:300px">
                        <img src="./90.jpg" class="card-img-top" alt="Basketball Tournament" style="height: 180px;">
                        <div class="card-body">
                            <h5 class="card-title">Basketball Tournament</h5>
                            <p class="card-text">Date: March 3, 2025<br>Venue: College Basketball Court<br>Teams from all faculties compete in this exciting tournament.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 400px;width:300px">
                        <img src="./kab.jpg" class="card-img-top" alt="Track and Field" style="height: 180px;">
                        <div class="card-body">
                            <h5 class="card-title">Kabaddi Match</h5>
                            <p class="card-text">Date: March 5, 2025<br>Venue: Volleyball Stadium<br>Witness thrilling races, relays, and field events with athletes from various disciplines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2024 XYZ College Sports Event. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>