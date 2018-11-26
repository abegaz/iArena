var tables = document.getElementsByTagName("TABLE");
var resetbtn = $("#resetbtn");

resetbtn.on('click', function () {
    console.log("hello");
    for (var i=tables.length-1; i>=0;i-=1) {
        if (tables[i]) {
            tables[i].parentNode.removeChild(tables[i]);
        }
    }
    $.ajax({
        type: "POST",
        url: "../PHPScripts/ResetDatabaseTableCheck.php",
        success: function (result) {
            console.log("Reset database table check success");
            $.ajax({
                type: "POST",
                url: "../PHPScripts/ResetGroupsScript.php",
                success: function (result) {
                    console.log("delete group data success");
                },
                error: function () {
                    alert("error");
                }
            });
        },
        error: function () {
            alert("error");
        }
    });
});