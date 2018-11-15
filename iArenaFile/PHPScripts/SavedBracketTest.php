<!DOCTYPE html>
<html>
<body>
    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "iarenadatabase";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    $check = 0;

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_error()) . ')' . mysqli_connect_error();
    } else {

        $sql_object = mysqli_query($conn, "SELECT * FROM teams ORDER BY RAND()");
        $rows = mysqli_num_rows($sql_object);

        $teamCounter=0;
        $divisionCount = 0;

        echo "<table class='table'>";
        while ($rows = mysqli_fetch_array($sql_object)) {
            $check = $rows['creationcheck'];
            if ($check == 1) {
             echo "$check";
            }
        }
    }

    ?>
</body>
</html>