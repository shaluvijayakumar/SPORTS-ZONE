<?php
include 'hod_das.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "", "sports");
if ($con) {
    $q = "select * from hod_details where id='$id'";
    $sq = mysqli_query($con, $q);
    if ($row = mysqli_fetch_row($sq)) {
        $dep = $row[8];
    }
}

?>

<div class="main">
    <center>
        <h1>FACULTY DETAILS</h1>
    </center>

    <?php
    $con = mysqli_connect("localhost", "root", "", "sports");
    if ($con) {
        $q = "select * from faculty_details where department='$dep'";
        $sql = mysqli_query($con, $q);
        print("<center><table border ; cellpadding=10px; border-collapse: collapse;>
        <tr style=background-color:red;>
        <th>Id</th>
        <th>Name</th>
        <th>Emp Id</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Alter Mobile</th>
        <th>Email</th>
        <th>Department</th>
        <th>Class</th>
        <th>USER NAME</th>
        <th>PASSWORD</th> 
        </tr>");
        while ($row = mysqli_fetch_row($sql)) {
            print("
            <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td>$row[10]</td>    
            <td>$row[11]</td>         
            </tr>");
        }
        print("</table></center>");
    }
    ?>
</div>