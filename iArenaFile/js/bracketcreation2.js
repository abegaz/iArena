var bracketbtn = $('#bracketbtn');
var bracketcontainer = $('#bracketcontainer');
var resetbtn = $('#resetbtn');

$("#bracketform").submit(function (e) {
    e.preventDefault();
});

bracketbtn.on('click', function () {
    console.log("hello");
    $.ajax({
        type: "POST",
        url: "SavedBracketTest.php",
        success: function (result) {
            $('#test').html(result);
            var temp = result;
            if (result === "true") {
                console.log("running second ajax");
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
            }
            else {
                console.log("error with saved bracket test")
            }
        }
    })
});

resetbtn.on('click', function () {

});