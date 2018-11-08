<!DOCTYPE html>
<html>
<body>
	<h2>Here I am!</h2>
    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "iarena3300";
    $dbname = "iarenadatabase";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
    } else {
        $sql_object = mysqli_query($conn, "SELECT * FROM teams ORDER BY RAND()");
        $rows = mysqli_num_rows($sql_object);

//	echo $sql_object;

        echo "<table>";
        while ($rows = mysqli_fetch_array($sql_object)) {
            echo "<tr><td>" . ($rows['teamname']) . "</td></tr>";
        }
        echo "</table>";
    }

    ?>
</body>
</html>