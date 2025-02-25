<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;

        }
    </style>
</head>

<body>
    <?php
    include 'student_das.php';
    ?>

    <?php
    $con = mysqli_connect("localhost", "root", "", "sports");
    if ($con) {
        $q = "select * from student_details where id='$id'";
        $sql = mysqli_query($con, $q);
        while ($row = mysqli_fetch_row($sql)) {

            $roll = $row[2];
        }
    }

    ?>

    <div class="main">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1> VOLUNTEER APPLICATION </h1>
                </center>
                <?php
                $con = mysqli_connect("localhost", "root", "", "sports");
                if ($con) {
                    $q = "select * from volunteer_details where  rno='$roll'";
                    $sql = mysqli_query($con, $q);

                    print("<center>
        <table border='1' cellpadding='10px' cellspacing='0' style='border-collapse: collapse;'>
            <tr>
                <th style='border: 2px solid black;'>S.no</th>
                <th style='border: 2px solid black;'>Date</th>
                <th style='border: 2px solid black;'>Game</th>
                <th style='border: 2px solid black;'>Status</th>
            </tr>");

                    $si = 1;

                    // Assuming $sql is the result of a MySQL query
                    while ($row = mysqli_fetch_row($sql)) {
                        // $row[0] = ID, $row[4] = Date, $row[7] = Game, $row[8] = Status
                        $id = $row[0];
                        $date = date_create("$row[4]");
                        $day = date_format($date, "d/m/y");

                        print("<form method='post'>
            <tr>
                <td style='border: 2px solid black;'>$si
                    <input type='hidden' value='$row[0]' name='id' style='border:none;width:7px;background-color:pink;'>
                </td>
                <td style='border: 2px solid black;'>$day</td>
                <td style='border: 2px solid black;'>$row[7]</td>
                <td style='border: 2px solid black;'>$row[8]</td>
            </tr>
          </form>");
                        $si++;
                    }

                    print("</table></center>");
                }
                ?>
            </div>
        </div>


        <div class="row" style="margin-top: 100px;">
            <div class="col-md-12">
                <center>
                    <h1> PLAYER APPLICATION </h1>
                </center>
                <?php
                $con = mysqli_connect("localhost", "root", "", "sports");
                if ($con) {
                    $q = "select * from player_details where  rno='$roll'";
                    $sql = mysqli_query($con, $q);

                    print("<center>
        <table border='1' cellpadding='10px' cellspacing='0' style='border-collapse: collapse;'>
            <tr>
                <th style='border: 2px solid black;'>S.no</th>
                <th style='border: 2px solid black;'>Date</th>
                <th style='border: 2px solid black;'>Game</th>
                <th style='border: 2px solid black;'>Status</th>
            </tr>");

                    $si = 1;

                    // Assuming $sql is the result of a MySQL query
                    while ($row = mysqli_fetch_row($sql)) {
                        // $row[0] = ID, $row[4] = Date, $row[7] = Game, $row[8] = Status
                        $id = $row[0];


                        print("<form method='post'>
            <tr>
                <td style='border: 2px solid black;'>$si
                    <input type='hidden' value='$row[0]' name='id' style='border:none;width:7px;background-color:pink;'>
                </td>
                <td style='border: 2px solid black;'>$day</td>
                <td style='border: 2px solid black;'>$row[6]</td>
                <td style='border: 2px solid black;'>$row[7]</td>
            </tr>
          </form>");
                        $si++;
                    }

                    print("</table></center>");
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>