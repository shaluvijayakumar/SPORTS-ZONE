<?php
include'admin_das.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="main">
<div class="container">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-5">
                <div class="card" style="margin-top:40px;">
                    <div class="cantainer">
                        <h3 align="center" style="color: red;"> HOD REGISTRATION FORM</h3>
                        <form method="post" enctype="multipart/form-data" style="padding:25px;">

                            <div class="mb-3">
                                
                                <input type="text" class="form-control" placeholder="Enter ID" name="id" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>

                            <div class="mb-3 mt-3">

                                <input type="text" class="form-control" placeholder="Enter Name" name="nam" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">DOB</label>
                                <input type="date" class="form-control" placeholder="Enter DOB" name="age" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>

                            <div class="mb-3">

                                <select id="ho" class="form-select" name="gen" required style="box-shadow:blue 1px 1px 2px 2px">
                                    <option selected disabled value=""> SELECT YOUR GENDER</option>
                                    <option value="male">MALE</option>
                                    <option value="female">FEMALE</option>
                                </select>
                            </div>

                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Enter Mobile number" name="mob" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>

                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Enter Alter Mobile number" name="altmob" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>

                            <div class="mb-3">

                                <input type="email" class="form-control" placeholder="Enter Email Id" name="mail" required style="box-shadow:blue 1px 1px 2px 2px">
                            </div>

                            <div class="mb-3">

                                <select id="hov" class="form-select" name="department" required style="box-shadow:blue 1px 1px 2px 2px">
                                    <option selected disabled value=""> Select Department</option>
                                    <option value="CS">CS</option>
                                    <option value="IT">IT & BCA</option>
                                    <option value="BCOM">BCOM</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCOM CA">BCOM CA</option>
                                    <option value="TAMIL">TAMIL</option>
                                    <option value="ENGLISH">ENGLISH</option>
                                    <option value="CDF">CDF</option>
                                    <option value="MATHS">MATHS</option>
                                </select>
                            </div>

                           
                            <div class="mb-3">
                                <input type="submit" value="REGISTER" name="sub" class='btn btn-' style="background-color: orange;  margin-left:20px">
                                <a href="admin das.php"> <input type="button" value="BACK" class='btn btn-danger' style="background-color: red; margin-left:  50px;"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php

if (isset($_POST["sub"])) {
    $Ip = $_POST["id"];
    $name = $_POST["nam"];
    $dob = $_POST["age"];
    $gender = $_POST["gen"];
    $mob = $_POST["mob"];
    $altmob = $_POST["altmob"];
    $email = $_POST["mail"];
    $dep = $_POST["department"];
    $use = $_POST["mail"];
    $x = $_POST["nam"];
    $y = substr("$x", 0, 3);
    $z = substr("$Ip", -3);
    $pass = $y . $z;

    $con = mysqli_connect("localhost", "root", "", "sports");

    if ($con) {
        $q = "insert into hod_details(name,empid,dob,gender,mobile,altmobile,email,department,username,pass)values('$name','$Ip','$dob','$gender','$mob','$altmob','$email','$dep','$use','$pass')";
        $sq = mysqli_query($con, $q);
        print("<script> alert('data inserted');</script>");
    }
}
?>


</body>
</html>