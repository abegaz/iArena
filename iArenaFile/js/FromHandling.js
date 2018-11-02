var signup = $("[name = signupform]");
var temp;

function validateform() {
    if ($('#password').val() === $('#confirmpassword').val()) {
        $('#pwerr').html("correct");
        signup.attr('action', 'PHPScripts/SignUpScript.php')
        return true;
    } else {
        $('#pwerr').html("passwords do not match");
        return false;
    }
}

$('#test').on('click', function () {
    $.ajax({
        type: "POST",
        url: "js/DBSearch.php",
        data: "",
        success: function (result) {
            console.log(result);
            temp = result;
            if (temp = false) {
                console.log("if statement works")
            }

        },
        error: function () {
            alert("error");
        }
    });
});

