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
			echo "<table>";
			while ($rows = mysqli_fetch_array($sql_object)) {
				if($teamCounter%4 == 0 && $divisionCount != 0){
					echo "</table>";
					$divisionCount = $divisionCount + 1;
					echo "<h2>Division ".$divisionCount."</h2>";
					echo "<table>";
					echo "<tr><td>" . ($rows['teamname']) . "</td></tr>";
					$teamCounter = $teamCounter + 1;
					
				} elseif ($teamCounter%4 == 0 && $divisionCount == 0){
					$divisionCount = $divisionCount + 1;
					echo "<h2>Division ".$divisionCount."</h2>";
					echo "<table>";
					echo "<tr><td>" . ($rows['teamname']) . "</td></tr>";
				$teamCounter = $teamCounter + 1;}
				
				else {
					echo "<tr><td>" . ($rows['teamname']) . "</td></tr>";
					$teamCounter = $teamCounter + 1;
				}
			}
			echo "</table>";
    }

?>
</body>
</html>