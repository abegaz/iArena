var signup = $("[name = signupform]");
var usernamelookup;
var signintest;
var pwerr = $('#pwerr');
var signinerr = $('#signinerr');
var usrnameerr = $('#usrnameerr');
var loginbtn = $('#loginbutton');
var signupbtn = $('#signupbutton');

loginbtn.on("mouseover", function () {
    loginbtn.css("background-color", "#2C9AB7")
});

loginbtn.on("mouseout", function () {
    loginbtn.css("background-color", "#52bad5")
});

signupbtn.on("mouseover", function () {
    signupbtn.css("background-color", "#2C9AB7")
});

signupbtn.on("mouseout", function () {
    signupbtn.css("background-color", "#52bad5")
});

function usernamesearch() {
    usrnameerr.html("");
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
                usrnameerr.html("username already in use");
            } else if (temp === "false") {
                console.log("database does not contain this username");
                usernamelookup = false;
            }

        },
        error: function () {
            alert("error");
        }
    });
}

$("#signinform").submit(function (e) {
    e.preventDefault();
});

function loginsearch() {
    console.log("sign in attempt");
    var validateusrname = $('#unamer').val();
    var validatepw = $('#pswr').val();
    console.log(validatepw);
    console.log(validateusrname);
    $.ajax({
        type: "POST",
        url: "PHPScripts/SignInScript.php",
        data: {validateusrname, validatepw},
        success: function (result) {
            console.log(result);
            temp = result;
            console.log(temp);
            if (temp === "true") {
                console.log("Sign in success");
                signintest = true;
                signinerr.html("");
            } else if (temp === "false") {
                console.log("Sign in fail");
                signintest = false;
                signinerr.html("username or password is incorrect");
            }

        },
        error: function () {
            alert("error");
        }
    });
}

/**
 * @return {boolean}
 */
function ValidateSignUpForm() {
    pwerr.html("");
    if ($('#password').val() === $('#confirmpassword').val() && usernamelookup === false) {
        pwerr.html("passwords match");
        signup.attr('action', 'PHPScripts/SignUpScript.php');
        return true;
    } else {
        pwerr.html("passwords do not match");
        return false;
    }
}
