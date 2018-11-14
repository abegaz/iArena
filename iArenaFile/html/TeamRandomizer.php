<!DOCTYPE html>
<html>
<body>
    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "iarenadatabase";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
    } else {
        $sql_object = mysqli_query($conn, "SELECT * FROM teams ORDER BY RAND()");
        $rows = mysqli_num_rows($sql_object);

		$teamCounter=0;
		$divisionCount = 0;
			echo "<table class='table'>";
			while ($rows = mysqli_fetch_array($sql_object)) {
                $color1 = $rows['color1'];
                $color2 = $rows['color2'];
				if($teamCounter%4 == 0 && $divisionCount != 0){
					echo "</tbody>";
					echo "</table>";
					$divisionCount = $divisionCount + 1;
                    echo "<table class='table'>";
                    echo "<thead>";
					echo "<tr><th>Division ".$divisionCount."</th><th>Wins</th><th>Losses</th><th>Draws</th><th>Total Points</th></tr>";
					echo "</thead><tbody>";
					echo "<tr><td><div class=$color1></div><div class=$color2></div><div id=teambox3></div>" . ($rows['teamname']) . "</td><td>".($rows['wins'])."</td><td>".($rows['losses'])."</td><td>".($rows['draws'])."</td><td>".($rows['TotalPoints'])."</td></tr>";
					$teamCounter = $teamCounter + 1;
				} elseif ($teamCounter%4 == 0 && $divisionCount == 0){
					$divisionCount = $divisionCount + 1;
                    echo "<table class='table'>";
                    echo "<thead>";
                    echo "<tr><th>Division ".$divisionCount."</th><th>Wins</th><th>Losses</th><th>Draws</th><th>Total Points</th></tr>";
                    echo "</thead><tbody>";
					echo "<tr><td><div class=$color1></div><div class=$color2></div><div id=teambox3></div>" . ($rows['teamname']) . "</td><td>".($rows['wins'])."</td><td>".($rows['losses'])."</td><td>".($rows['draws'])."</td><td>".($rows['TotalPoints'])."</td></tr>";
					$teamCounter = $teamCounter + 1;}
				
				else {
					echo "<tr><td><div class=$color1></div><div class=$color2></div><div id=teambox3></div>" . ($rows['teamname']) . "</td><td>".($rows['wins'])."</td><td>".($rows['losses'])."</td><td>".($rows['draws'])."</td><td>".($rows['TotalPoints'])."</td></tr>";
					$teamCounter = $teamCounter + 1;
				}
			}
			echo "</table>";
			echo "<br>";
    }

?>
</body>
</html>