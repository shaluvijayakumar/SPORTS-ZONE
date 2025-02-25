<?php
include 'student_das.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "", "sports");
if ($con) {
    $q = "select * from student_details where id='$id'";
    $sql = mysqli_query($con, $q);
    while ($row = mysqli_fetch_row($sql)) {

        $name = $row[1];
        $rol = $row[2];
        $gender = $row[4];
        $dep = $row[7];
        $year = $row[8];
    }
}

?>

<body class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-5">
                <div class="card" style="margin-top:40px;">
                    <div class="cantainer">
                        <h3 align="center" style="color: red;"> Game Applay Form</h3>
                        <form method="post" enctype="multipart/form-data" style="padding:25px;">



                            <div class="mb-3">
                                <label class="form-label"> Name</label>
                                <?php
                                print("<input type='text' value='$name' class='form-control' name='name'><br>
                                 ") ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Roll Number</label>
                                <?php
                                print("<input type='text' value='$rol' class='form-control' name='rol'><br>
                                  ") ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Gender</label>
                                <?php
                                print("<tr><input type='text' value='$gender' class='form-control' name='gen'></tr><br>
                                    ") ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Department</label>
                                <?php
                                print("<tr><input type='text' value='$dep' class='form-control' name='depart'></tr><br>
                                    ") ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Class</label>
                                <?php
                                print("<tr><input type='text' value='$year' class='form-control' name='year'></tr><br>
                                    ") ?>
                            </div>

                            <div class="mb-3">

                                <select id="hov" class="form-select" name="game" required>
                                    <option selected disabled value=""> Select Game</option>
                                    <option value="Running">Running</option>
                                    <option value="Volleyball">Volleyball</option>
                                    <option value="Football">Football</option>
                                    <option value="Tennis">Tennis</option>
                                    <option value="Cricket">Cricket</option>
                                    <option value="Kabaddi">Kabaddi</option>
                                    <option value="Kho Kho">Kho Kho</option>
                                </select>
                            </div>





                            <div class="mb-3">
                                <input type="submit" value="Applay" name="sub" class='btn btn-' style="background-color: orange;  margin-left:160px">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php

    if (isset($_POST["sub"])) {
        $nam = $_POST["name"];
        $rolno = $_POST["rol"];
        $gender = $_POST["gen"];
        $dp = $_POST["depart"];
        $cls = $_POST["year"];
        $game = $_POST["game"];
        $sta = "new";

        $con = mysqli_connect("localhost", "root", "", "sports");

        if ($con) {
            $q = "insert into  player_details(name,rno,gender,department,class,game,status)values('$nam','$rolno','$gender','$dp','$cls','$game','$sta')";
            $sq = mysqli_query($con, $q);
            print("<script> alert('applayed');</script>");
        }
    }
    ?>


</body>

</html>