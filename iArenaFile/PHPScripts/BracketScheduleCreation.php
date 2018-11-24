<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

$randomnumber = rand(1,4);

$sql_object = mysqli_query($conn, "SELECT teamname FROM grouptables");

$teamsarray = array();

while($row = mysqli_fetch_assoc($sql_object)){

    $teamsarray[] = $row;
}
//print_r($array); // show all array data

for($i = 0; $i < sizeof($teamsarray); $i++ ) {
    echo $teamsarray[$i]['teamname'];
    echo "<br>";
}

$group1array = array();
$group2array = array();
$group3array = array();
$group4array = array();
$group5array = array();
$group6array = array();
$group7array = array();
$group8array = array();

for ($i = 0; $i < sizeof($teamsarray); $i++) {
    if ($i<4) {
        $group1array[$i] = $teamsarray[$i];
        echo $group1array[$i]['teamname'] ;
    }
    if ($i<8) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<12) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<16) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<20) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<24) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<28) {
        $group2array[$i] = $teamsarray[$i];
    }
    if ($i<32) {
        $group2array[$i] = $teamsarray[$i];
    }
}

