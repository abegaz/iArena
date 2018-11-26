<?php

$username = $_POST['myinput'];
$check;

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
} else {

    $result = mysqli_query($conn, "SELECT * FROM iarenadbtable
    WHERE Username LIKE '%{$username}%'");

    if ($result->num_rows) {
        $check = true;
        echo json_encode($check);
    } else {
        $check = false;
        echo json_encode($check);
    }

    $conn->close();
}

// header('Location: index.html');
exit;
?>