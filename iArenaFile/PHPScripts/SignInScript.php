/**
 * Created by WebStorm.
 * User: jctru
 * Date: 11/1/2018
 * Time: 9:33 AM
 */
<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "iarena3300";
$dbname = "youtube";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
}
else {
    $sql = "INSERT INTO account (username, password)
    values ('$username', '$password')";
    if ($conn->query($sql)) {
        echo "new record inserted";
    }
    else {
        echo "Eror".$sql."<br>".$conn->error;
    }
    $conn->close();
}

// header('Location: index.html');
exit;
?>