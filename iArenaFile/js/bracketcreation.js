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
        },
        error: function () {
            alert("error");
        }
    });
});