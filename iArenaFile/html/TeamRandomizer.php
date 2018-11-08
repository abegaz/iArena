<!DOCTYPE html>
<html>
<body>
<h2>Here I am!</h2>
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
}

else {
	$sql_object = mysqli_query($conn, "SELECT teamname FROM teams ORDER BY RAND()");

		$index = 1;	
			while ($row = mysqli_fetch_object($sql_object)) {

				$index = $index + 1;
			}
}

?>
</body>
</html>