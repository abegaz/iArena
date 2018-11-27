<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "iarenadatabase";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

$randomnumber = rand(0,3);

$sql_object = mysqli_query($conn, "SELECT teamname FROM grouptables");

$teamsarray = array();

while($row = mysqli_fetch_assoc($sql_object)){

    $teamsarray[] = $row;
}
//print_r($array); // show all array data

//for($i = 0; $i < sizeof($teamsarray); $i++ ) {
////    echo $teamsarray[$i]['teamname'];
//    echo "<br>";
//}

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
        $group3array[$i] = $teamsarray[$i];
    }
    if ($i<16) {
        $group4array[$i] = $teamsarray[$i];
    }
    if ($i<20) {
        $group5array[$i] = $teamsarray[$i];
    }
    if ($i<24) {
        $group6array[$i] = $teamsarray[$i];
    }
    if ($i<28) {
        $group7array[$i] = $teamsarray[$i];
    }
    if ($i<32) {
        $group8array[$i] = $teamsarray[$i];
    }
}

$group1floor = 0;
$group1floor = 4;
$group1floor = 8;
$group1floor = 12;
$group1floor = 16;
$group1floor = 20;
$group1floor = 24;
$group1floor = 28;




