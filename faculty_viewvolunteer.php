<?php
include 'faculty_das.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "", "sports");
if ($con) {
    $q = "select * from faculty_details where id='$id'";
    $sql = mysqli_query($con, $q);
    while ($row = mysqli_fetch_row($sql)) {

        $dep = $row[8];
        $class = $row[9];
    }
}

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
                $q = "select * from volunteer_details where  department='$dep' and class='$class'";
                $sql = mysqli_query($con, $q);
                print("<center> <table border=3px; cellpadding=10px>
                        <tr>
                        <th>Id</th>
                            <th>Name</th>
                            <th>Roll Number</th>
                            <th>Gender</th>
                            <th> date</th>
                            <th>game</th>
                            <th>Status</th>
                            <th></th>
                            </tr>");
                $si = 1;
                while ($row = mysqli_fetch_row($sql)) {
                    $id = $row[0];
                    $date = date_create("$row[4]");
                    $day = date_format($date, "d/m/y h:i");
                    print("<form method='post'>
                        <tr>
                         <td>$si<input type='hidden' value='$row[0]' class='bg-success' name='id'style='border:none;width:7px; background-color:pink;'></td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$day</td>
                        <td>$row[7]</td> 
                        <td> $row[8]</td>
                        </tr><br> </form>");
                    $si = $si + 1;
                }
                print("</table></center>");
            }

            ?>
        </div>
    </div>
</div>