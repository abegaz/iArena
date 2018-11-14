var bracketbtn = $('#bracketbtn');
var bracketcontainer = $('#bracketcontainer');

$("#bracketform").submit(function (e) {
    e.preventDefault();
});

bracketbtn.on('click', function () {
    console.log("hello");
    $.ajax({
        type: "POST",
        url: "TeamRandomizer.php",
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
});