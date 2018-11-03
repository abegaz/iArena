var signup = $("[name = signupform]");
var submitbutton = document.getElementById("submitbutton");
var testcase = false;
var usernamelookup = false;

submitbutton.disabled = true;

function usernamesearch() {
    var myinput = $("#username").val();
    console.log(myinput);
    $.ajax({
        type: "POST",
        url: "PHPScripts/DBSearch.php",
        data: {myinput},
        success: function (result) {
            console.log(result);
            temp = result;
            console.log(temp);
            if (temp === "true") {
                console.log("database contains this usertname");
                usernamelookup = true;
                $('#pwerr').html("username already in use");
            }
            else if (temp === "false") {
                console.log("database does not contain this username");
                usernamelookup = false;
                submitbutton.disabled = false;
            }

        },
        error: function () {
            alert("error");
        }
    });
}

function validateform() {
    if (usernamelookup === false) {
        if ($('#password').val() === $('#confirmpassword').val()) {
            $('#pwerr').html("correct");

            signup.attr('action', 'PHPScripts/SignUpScript.php')
            return true;
        } else {
            $('#pwerr').html("passwords do not match");
            return false;
        }
    }
    else {
        return false;
    }
}
