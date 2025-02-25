<?php
session_start();
$id = $_SESSION["Id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }


        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #232362;
            overflow-x: hidden;
            padding-top: 20px;
        }


        .sidenav a,
        .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 23px;
            color: #40b39b;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }


        .sidenav a:hover,
        .dropdown-btn:hover {
            color: #f1f1f1;
        }


        .main {
            margin-left: 200px;

            font-size: 20px;

            padding: 0px 10px;
        }


        .active {
            background-color: green;
            color: white;
        }


        .dropdown-container {
            display: none;
            background-color: #232362;
            padding-left: 8px;
        }


        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }


        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>



<div class="sidenav">
    <button class="dropdown-btn">volunteer
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="faculty_apvolunteer.php">Aprove</a>
        <a href="faculty_viewvolunteer.php">View</a>
    </div>
    <button class="dropdown-btn">Player
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="faculty_applayer.php">Aprove</a>
        <a href="faculty_viewplayer.php">View</a>
    </div>
    <a href="faculty_timetable.php">View Time Table</a>
    <a href="faculty_result.php">View Result</a>

    <button class="btn bg-info" style="margin-top:300px;"><a href="homepage.php" style="color: red;">Logout</a></button>

</div>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</html>