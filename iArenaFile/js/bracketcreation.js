var bracketbtn = $('#bracketbtn');
var bracketcontainer = $('#bracketcontainer');
var resetbtn = $('#resetbtn');

$("#bracketform").submit(function (e) {
    e.preventDefault();
});

window.onload = load;

bracketbtn.on('click', function () {
    console.log("hello");
    $.ajax({
        type: "POST",
        url: "../PHPScripts/TeamRandomizer.php",
        success: function (result) {
            $.ajax({
                type: "POST",
                url: "../PHPScripts/BracketScheduleCreation.php",
                async: false,
                success: function (result) {
                },
                error: function () {
                    alert("error");
                }
            });
            bracketcontainer.html(result);
            $( "tr" ).not("thead tr").hover(
                function() {
                    $( this ).addClass( "is-selected" );
                }, function() {
                    $( this ).removeClass( "is-selected" );
                }
            );
        },
        error: function () {
            alert("error");
        }
    });
});

function load() {
    $.ajax({
        type: "POST",
        url: "../PHPScripts/SavedBracketTest.php",
        success: function (result) {
            bracketcontainer.html(result);
            $( "tr" ).not("thead tr").hover(
                function() {
                    $( this ).addClass( "is-selected" );
                }, function() {
                    $( this ).removeClass( "is-selected" );
                }
            );
        },
        error: function () {
            alert("error");
        }
    });
}