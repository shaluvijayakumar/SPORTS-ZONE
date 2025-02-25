<?php
include 'hod_das.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "", "sports");
if ($con) {
    $q = "select * from hod_details where id='$id'";
    $sql = mysqli_query($con, $q);
    while ($row = mysqli_fetch_row($sql)) {

        $dep = $row[8];
    }
}

?>


<div class="main">

    <div class="row">
        <div class="col-md-12">
            <center>
                <h1> PLAYER DETAILS </h1>
            </center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "sports");
            if ($con) {
                $q = "select * from player_details where department='$dep'and status='approve'";
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
                        </tr><br> </form>");
                    $si = $si + 1;
                }
                print("</table></center>");
            }

            ?>
        </div>
    </div>
    <div class="row" style="margin-top: 200px;">
        <div class="col-md-12">
            <center>
                <h1>REJECT PLAYER DETAILS </h1>
            </center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "sports");
            if ($con) {
                $q = "select * from player_details where department='$dep'and status='Reject by HOD'";
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
                    $q = "update player_details set status='approve' where id='$ID'";
                    $sql = mysqli_query($con, $q);
                }
            }

            ?>
        </div>
    </div>

</div>