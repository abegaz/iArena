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

$group1array = array();
$group2array = array();
$group3array = array();
$group4array = array();
$group5array = array();
$group6array = array();
$group7array = array();
$group8array = array();

$groupsarray = array();


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

$team1 = $group1array[0]['teamname'];
$team2 = $group1array[1]['teamname'];
$team3 = $group1array[2]['teamname'];
$team4 = $group1array[3]['teamname'];
$team29 = $group8array[0]['teamname'];
$team30 = $group8array[1]['teamname'];
$team31 = $group8array[2]['teamname'];
$team32 = $group8array[3]['teamname'];
$team25 = $group7array[0]['teamname'];
$team26 = $group7array[1]['teamname'];
$team27 = $group7array[2]['teamname'];
$team28 = $group7array[3]['teamname'];
$team21 = $group6array[0]['teamname'];
$team22 = $group6array[1]['teamname'];
$team23 = $group6array[2]['teamname'];
$team24 = $group6array[3]['teamname'];
$team17 = $group5array[0]['teamname'];
$team18 = $group5array[1]['teamname'];
$team19 = $group5array[2]['teamname'];
$team20 = $group5array[3]['teamname'];
$team13 = $group4array[0]['teamname'];
$team14 = $group4array[1]['teamname'];
$team15 = $group4array[2]['teamname'];
$team9 = $group3array[0]['teamname'];
$team10 = $group3array[1]['teamname'];
$team11 = $group3array[2]['teamname'];
$team12 = $group3array[3]['teamname'];
$team16 = $group4array[3]['teamname'];
$team5 = $group2array[0]['teamname'];
$team6 = $group2array[1]['teamname'];
$team7 = $group2array[2]['teamname'];
$team8 = $group2array[3]['teamname'];


$sql = "UPDATE bracketschedule SET Team1 = '$team1', Team2 = '$team2' WHERE Date = '2014-06-12' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team2', Team2 = '$team3' WHERE Date = '2014-06-16' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team1', Team2 = '$team3' WHERE Date = '2014-06-20' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team3', Team2 = '$team4' WHERE Date = '2014-06-24' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team1', Team2 = '$team4' WHERE Date = '2014-06-28' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team2', Team2 = '$team4' WHERE Date = '2014-07-02' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team5', Team2 = '$team6' WHERE Date = '2014-06-12' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team6', Team2 = '$team7' WHERE Date = '2014-06-16' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team5', Team2 = '$team7' WHERE Date = '2014-06-20' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team7', Team2 = '$team8' WHERE Date = '2014-06-24' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team5', Team2 = '$team8' WHERE Date = '2014-06-28' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team6', Team2 = '$team8' WHERE Date = '2014-07-02' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team9', Team2 = '$team10' WHERE Date = '2014-06-13' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team10', Team2 = '$team11' WHERE Date = '2014-06-17' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team9', Team2 = '$team11' WHERE Date = '2014-06-21' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team11', Team2 = '$team12' WHERE Date = '2014-06-25' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team9', Team2 = '$team12' WHERE Date = '2014-06-29' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team10', Team2 = '$team12' WHERE Date = '2014-07-03' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team13', Team2 = '$team14' WHERE Date = '2014-06-13' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team14', Team2 = '$team15' WHERE Date = '2014-06-17' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team13', Team2 = '$team15' WHERE Date = '2014-06-21' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team15', Team2 = '$team16' WHERE Date = '2014-06-25' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team13', Team2 = '$team16' WHERE Date = '2014-06-29' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team14', Team2 = '$team16' WHERE Date = '2014-07-03' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team17', Team2 = '$team18' WHERE Date = '2014-06-14' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team18', Team2 = '$team19' WHERE Date = '2014-06-18' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team17', Team2 = '$team19' WHERE Date = '2014-06-22' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team19', Team2 = '$team20' WHERE Date = '2014-06-26' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team17', Team2 = '$team20' WHERE Date = '2014-06-30' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team18', Team2 = '$team20' WHERE Date = '2014-07-04' AND Time = '09:00:00';
UPDATE bracketschedule SET Team1 = '$team21', Team2 = '$team22' WHERE Date = '2014-06-14' AND Time = '012:00:00';
UPDATE bracketschedule SET Team1 = '$team22', Team2 = '$team23' WHERE Date = '2014-06-18' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team21', Team2 = '$team23' WHERE Date = '2014-06-22' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team3', Team2 = '$team4' WHERE Date = '2014-06-26' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team21', Team2 = '$team24' WHERE Date = '2014-06-30' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team22', Team2 = '$team24' WHERE Date = '2014-07-04' AND Time = '12:00:00';
UPDATE bracketschedule SET Team1 = '$team25', Team2 = '$team26' WHERE Date = '2014-06-15' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team26', Team2 = '$team27' WHERE Date = '2014-06-19' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team25', Team2 = '$team27' WHERE Date = '2014-06-23' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team27', Team2 = '$team28' WHERE Date = '2014-06-27' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team25', Team2 = '$team28' WHERE Date = '2014-07-01' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team26', Team2 = '$team28' WHERE Date = '2014-07-05' AND Time = '15:00:00';
UPDATE bracketschedule SET Team1 = '$team29', Team2 = '$team30' WHERE Date = '2014-06-15' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team30', Team2 = '$team31' WHERE Date = '2014-06-19' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team29', Team2 = '$team31' WHERE Date = '2014-06-23' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team31', Team2 = '$team32' WHERE Date = '2014-06-27' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team29', Team2 = '$team32' WHERE Date = '2014-07-01' AND Time = '18:00:00';
UPDATE bracketschedule SET Team1 = '$team30', Team2 = '$team32' WHERE Date = '2014-07-05' AND Time = '18:00:00';";

if ($conn->multi_query($sql)) {
    echo "new record inserted";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}





?>
