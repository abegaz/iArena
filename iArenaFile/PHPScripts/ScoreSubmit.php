<?php
$team1name = $_POST['team1name'];
$team2name = $_POST['team2name'];
$team1score = $_POST['team1score'];
$team2score = $_POST['team2score'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

mysqli_query($conn, "UPDATE bracketschedule WHERE Team1 = '$team1name' AND Team2 = '$team2name' SET Team1Score = '$team1score' AND SET Team2Score = '$team2score' ");
