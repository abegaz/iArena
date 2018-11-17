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

    while ($rows = mysqli_fetch_array($sql_object)) {
        $color1 = $rows['color1'];
        $color2 = $rows['color2'];
        $color3 = $rows['color3'];
        $check = $rows['creationcheck'];
        if ($check == 1) {

            $updatesql = "UPDATE teams SET creationcheck = 0 WHERE creationcheck = 1";

            if (mysqli_query($conn, $updatesql)) {
//                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

        }
        else {
//            echo "no table exists";
        }
    }
}

?>