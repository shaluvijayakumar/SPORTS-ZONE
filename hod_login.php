<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-image:url('log.jpg') ;">
    <header>
        <div class="container-fluid" style=" background-color: #008cba;">
            <div class=" row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <h1 style="padding-top:30px; padding-left:200px;  color:orange;">KASC SPORTS</h1>
                </div>
            </div>
        </div>



    </header>


    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4 card" style="margin-top: 150px; width:520px;height:300px;padding-left:30px">
                <h1 style="color:black;">HOD LOGIN </h1>
                <div>
                    <form method="post" enctype="multipart/form-data">

                        <input type="text" class="form-control" placeholder="Enter User Name" name="use" required style="width:450px;height:50px;box-shadow:blue 1px 1px 2px 2px;margin-top:20px;">


                        <input type="password" class="form-control" placeholder="Enter Password" name="pass" required style="width:450px;height:50px;box-shadow:blue 1px 1px 2px 2px;margin-top:20px;"><br>

                        <input type="submit" class="btn btn-success" value="LOGIN" name="sub" style="background-color: green; margin-left:10px;">
                        <a href="homepage.php"> <input type="button" value="BACK" class="btn btn-danger" style="background-color:red; margin-left:250px;margin-top:5px;"></a>


                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="col-sm-4"></div>
    </div>
    </div>

</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "sports");
if ($con) {
    if (isset($_POST["sub"])) {
        $use = $_POST["use"];
        $pass = $_POST["pass"];
        $q = "select * from hod_details where username='$use' and pass='$pass'";
        $sq = mysqli_query($con, $q);
        if ($row = mysqli_fetch_row($sq)) {
            $id = $row[0];
            session_start();
            $_SESSION["Id"] = $id;

            print("<script> alert('login sucess'); document.location='hod_das.php';</script>");
        } else {
            print("<script> alert('enter valid password');</script>");
        }
    }
}

?>