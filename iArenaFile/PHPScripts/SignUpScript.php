/**
* Created by WebStorm.
* User: jctru
* Date: 11/1/2018
* Time: 9:38 AM
*/
<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "iarena3300";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
} else {
    $sql = "INSERT INTO iarenadbtable (firstname, lastname, username, password)
    values ('$firstname', '$lastname', '$username', '$password')";
    if ($conn->query($sql)) {
        echo "new record inserted";
    } else {
        echo "Eror" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

 header('Location: ../loginiArena.html');
exit;
?>