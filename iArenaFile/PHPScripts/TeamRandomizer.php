<!DOCTYPE html>
<html>
<body>
    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "iarenadatabase";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    $check = -1;

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
    } else {

        $sql_object = mysqli_query($conn, "SELECT * FROM teams ORDER BY RAND()");
        $rows = mysqli_num_rows($sql_object);

        $teamCounter = 0;
        $divisionCount = 0;
        echo "<table class='table'>";
        while ($rows = mysqli_fetch_array($sql_object)) {
            $color1 = $rows['color1'];
            $color2 = $rows['color2'];
            $color3 = $rows['color3'];
            $check = $rows['creationcheck'];
            if ($check == 0) {
//                	echo "check is equal to 0 ... $check";
                if ($teamCounter % 4 == 0 && $divisionCount != 0) {
                    echo "</tbody>";
                    echo "</table>";
                    $divisionCount = $divisionCount + 1;
                    echo "<table class='table'>";
                    echo "<thead>";
                    echo "<tr><th>Division " . $divisionCount . "</th><th>Wins</th><th>Losses</th><th>Draws</th><th>Total Points</th></tr>";
                    echo "</thead><tbody>";
                    echo "<tr><td><div class=$color1></div><div class=$color2></div><div class=$color3></div>" . ($rows['teamname']) . "</td><td>" . ($rows['wins']) . "</td><td>" . ($rows['losses']) . "</td><td>" . ($rows['draws']) . "</td><td>" . ($rows['TotalPoints']) . "</td></tr>";
                    $teamCounter = $teamCounter + 1;
                } elseif ($teamCounter % 4 == 0 && $divisionCount == 0) {
                    $divisionCount = $divisionCount + 1;
                    echo "<table class='table'>";
                    echo "<thead>";
                    echo "<tr><th>Division " . $divisionCount . "</th><th>Wins</th><th>Losses</th><th>Draws</th><th>Total Points</th></tr>";
                    echo "</thead><tbody>";
                    echo "<tr><td><div class=$color1></div><div class=$color2></div><div class=$color3></div>" . ($rows['teamname']) . "</td><td>" . ($rows['wins']) . "</td><td>" . ($rows['losses']) . "</td><td>" . ($rows['draws']) . "</td><td>" . ($rows['TotalPoints']) . "</td></tr>";
                    $teamCounter = $teamCounter + 1;
                } else {
                    echo "<tr><td><div class=$color1></div><div class=$color2></div><div class=$color3></div>" . ($rows['teamname']) . "</td><td>" . ($rows['wins']) . "</td><td>" . ($rows['losses']) . "</td><td>" . ($rows['draws']) . "</td><td>" . ($rows['TotalPoints']) . "</td></tr>";
                    $teamCounter = $teamCounter + 1;
                }

                $teamname = $rows['teamname'];
                $wins = $rows['wins'];
                $draws = $rows['draws'];
                $losses = $rows['losses'];
                $totalpoints = $rows['TotalPoints'];
                $color1data = $rows['color1'];
	            $color2data = $rows['color2'];
	            $color3data = $rows['color3'];
//                echo "at insert";
                $check = 1;
                $sql = "INSERT INTO grouptables (teamname, wins, draws, loses, totalpoints, color1, color2, color3, creationcheck) 
              VALUES('$teamname', '$wins', '$draws', '$losses', '$totalpoints', '$color1data', '$color2data', '$color3data', '$check')";


                $updatesql = "UPDATE teams SET creationcheck= 1 WHERE creationcheck = 0";

                if (mysqli_query($conn, $updatesql)) {
//                        echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }

                if ($conn->query($sql) === true)
                {
//                    echo "Records inserted successfully.";
                }
                else
                {
                    echo "ERROR: Could not able to execute $sql. "
                        .$conn->error;
                }

            } else {
//                	echo "table already exists";
            }
        }
        echo "</table>";
        echo "<br>";
    }

    ?>
</body>
</html>