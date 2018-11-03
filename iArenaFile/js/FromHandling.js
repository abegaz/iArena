var signup = $("[name = signupform]");
var usernamelookup;

function usernamesearch() {
    $('#usrnameerr').html("");
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
                $('#usrnameerr').html("username already in use");
            }
            else if (temp === "false") {
                console.log("database does not contain this username");
                usernamelookup = false;
            }

        },
        error: function () {
            alert("error");
        }
    });
}

function validateform() {
    $('#pwerr').html("");
        if ($('#password').val() === $('#confirmpassword').val() && usernamelookup === false) {
            $('#pwerr').html("passwords match");
            signup.attr('action', 'PHPScripts/SignUpScript.php');
            return true;
        } else {
            $('#pwerr').html("passwords do not match");
            return false;
        }
    }
