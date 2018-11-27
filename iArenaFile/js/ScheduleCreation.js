var listitem;
window.onload = function () {
    var list = document.getElementsByClassName('matchteams');
    for (var i = 0; i < list.length; i++) {
        load();
        list[i].innerText=listitem;
    }

    $.ajax({
        type: "POST",
        url: "../PHPScripts/playedreset.php",
        async: false,
        success: function (result) {

        },
        error: function () {
            alert("error");
        }
    });

};

function load() {
    $.ajax({
        type: "POST",
        url: "../PHPScripts/SchedulePull.php",
        async: false,
        success: function (result) {
            // alert(result);
            listitem = result;
            $("#test").html(listitem);
        },
        error: function () {
            alert("error");
        }
    });
}

var teamscorebtn = $("#teamscoresubmitbtn");

teamscorebtn.on('click', function () {
    var team1name = $("#team1form").val();
    var team2name = $("#team2form").val();
    var team1score = $("#team1Score").val();
    var team2score = $("#team2Score").val();
    console.log(team1name);
    console.log(team2name);
    console.log(team1score);
    console.log(team2score);
    $.ajax({
        type: "POST",
        url: "../PHPScripts/ScoreSubmit.php",
        data: {team1name, team2name, team1score, team2score},
        success: function (result) {
            alert("success");

        },
        error: function () {
            alert("error");
        }
    });
});
