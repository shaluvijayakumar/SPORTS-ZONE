<?php
include 'admin_das.php';
?>



<div class="main">

    <div class="row">
        <div class="col-md-12">
            <center>
                <h1> VOLUNTEER DETAILS </h1>
            </center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "sports");
            if ($con) {
                $q = "select * from volunteer_details  where status='approve'";
                $sql = mysqli_query($con, $q);
                print("<center> <table border=3px; cellpadding=10px>
                        <tr>
                        <th>Id</th>
                            <th>Name</th>   
                            <th>Roll Number</th>
                            <th>Gender</th>
                            <th>game</th>
                            <th>Status</th>
                            <th></th>
                            </tr>");

                while ($row = mysqli_fetch_row($sql)) {
                    $id = $row[0];

                    print("<form method='post'>
                        <tr>
                         <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[6]</td> 
                        <td> $row[7]</td>
                        </tr><br> </form>");
                }
                print("</table></center>");
            }

            ?>
        </div>
    </div>
    <div class="row" style="margin-top: 200px;">
        <div class="col-md-12">
            <center>
                <h1>REJECT VOLUNTEER DETAILS </h1>
            </center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "sports");
            if ($con) {
                $q = "select * from volunteer_details where status='Reject by admin'";
                $sql = mysqli_query($con, $q);
                print("<center> <table border=3px; cellpadding=10px>
                        <tr>
                        <th>Id</th>
                            <th>Name</th>   
                            <th>Roll Number</th>
                            <th>Gender</th>
                            <th>game</th>
                            <th>Status</th>
                            <th></th>
                            </tr>");
                $si = 1;
                while ($row = mysqli_fetch_row($sql)) {
                    $id = $row[0];

                    print("<form method='post'>
                        <tr>
                         <td>$si<input type='hidden' value='$row[0]' class='bg-success' name='id'style='border:none;width:7px; background-color:pink;'></td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[6]</td> 
                        <td> $row[7]</td>
                         <td> <input type='submit' value='approve' name='app'> </td>
                        </tr><br> </form>");
                    $si = $si + 1;
                }
                print("</table></center>");
            }
            if (isset($_POST["app"])) {
                $ID = $_POST["id"];
                $con = mysqli_connect("localhost", "root", "", "sports");
                if ($con) {
                    $q = "update volunteer_details set status='approve' where id='$ID'";
                    $sql = mysqli_query($con, $q);
                }
            }

            ?>
        </div>
    </div>

</div>