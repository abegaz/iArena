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