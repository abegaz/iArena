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

$group1array = array();
$group2array = array();
$group3array = array();
$group4array = array();
$group5array = array();
$group6array = array();
$group7array = array();
$group8array = array();



for ($i = 0; $i < sizeof($teamsarray); $i++) {
    if ($i<4 && $i>=0) {
        $group1array[$i] = $teamsarray[$i];
    }
    if ($i<8 && $i>=4) {
        $group2array[$i-4] = $teamsarray[$i];
    }
    if ($i<12 && $i>=8) {
        $group3array[$i-8] = $teamsarray[$i];
    }
    if ($i<16 && $i>=12) {
        $group4array[$i-12] = $teamsarray[$i];
    }
    if ($i<20 && $i>=16) {
        $group5array[$i-16] = $teamsarray[$i];
    }
    if ($i<24 && $i>=20) {
        $group6array[$i-20] = $teamsarray[$i];
    }
    if ($i<28 && $i>=24) {
        $group7array[$i-24] = $teamsarray[$i];
    }
    if ($i<32 && $i>=28) {
        $group8array[$i-28] = $teamsarray[$i];
    }
}

$divisionArray = array($group1array,$group2array,$group3array,$group4array,$group5array,$group6array,$group7array,$group8array);

echo print_r($divisionArray[0][0]['teamname']);
echo print_r($divisionArray[0][1]['teamname']);
echo print_r($divisionArray[0][2]['teamname']);
echo print_r($divisionArray[0][3]['teamname']);
echo print_r($divisionArray[1][0]['teamname']);

?>
