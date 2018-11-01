/**
 * Created by WebStorm.
 * User: jctru
 * Date: 11/1/2018
 * Time: 4:46 PM
 */
<?php

$username = filter_input(INPUT_POST, 'username');

$host = "localhost";
$dbusername = "root";
$dbpassword = "iarena3300";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
}

else {
//    $sql = "INSERT INTO account (username, password)
//    values ('$username', '$password')";
//
//    $result = mysqli_query($con, "SELECT * FROM employees
//    WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'");
    $sql = "SELECT * FROM iarenadbtable WHERE Username LIKE '%{$username}%'";
    if ($conn->query($sql)) {
        echo "new record inserted" + $username + $sql;
    }
    else {
        echo "Eror".$sql."<br>".$conn->error;
    }
    $conn->close();
}

// header('Location: index.html');
exit;
?>