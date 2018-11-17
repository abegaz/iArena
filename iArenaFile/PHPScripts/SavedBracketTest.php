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
    $true = true;
    $false = false;

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_error()) . ')' . mysqli_connect_error();
    } else {

        $sql_object = mysqli_query($conn, "SELECT * FROM teams ORDER BY RAND()");
        $rows = mysqli_num_rows($sql_object);

        while ($rows = mysqli_fetch_array($sql_object)) {
            $check = $rows['creationcheck'];
        }
        if ($check == 0) {
            echo json_encode(true);
        }
        else {
        	echo "table already exists";
        }

    }

    ?>
</body>
</html>