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
            // bracketcontainer.html(result);
        },
        error: function () {
            alert("error");
        }
    });
});