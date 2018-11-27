<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

$sql_object = mysqli_query($conn, "SELECT * FROM bracketschedule WHERE Winner IS NULL LIMIT 1");

while ($row = mysqli_fetch_object($sql_object)) {
    echo $row->Team1;
    echo " vs. ";
    echo $row->Team2;
    echo " ( ".$row->Team1Score. " - ".$row->Team2Score." ) ";
}

mysqli_query($conn, "UPDATE bracketschedule SET Winner = 1 WHERE Winner IS NULL LIMIT 1");