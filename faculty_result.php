<?php
include 'faculty_das.php';
?>
<div class="main">
    <center>
        <h1>RESULT</h1>
    </center>

    <?php
    $con = mysqli_connect("localhost", "root", "", "sports");
    if ($con) {
        $q = "select * from time_table where status='update'";
        $sql = mysqli_query($con, $q);
        print("<center><table border=1px ; cellpadding=10px; border-collapse: collapse;>
        <tr style=background-color:red;>
        <th>Date</th>
        <th>Game</th>
        <th>gender</th>
        <th>Team 1</th>
        <th>Team 2</th>
        <th>Type</th> 
        <th>winner</th>
        </tr>");
        while ($row = mysqli_fetch_row($sql)) {
            print("
            <tr>
            
            <td>$row[1]</td>
          
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>$row[9]</td>
                       
            </tr>");
        }
        print("</table></center>");
    }
    ?>
</div>