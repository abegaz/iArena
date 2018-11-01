var signup = $("[name = signupform]");

function validatemyform() {
    if ($('#password').val() === $('#confirmpassword').val()) {
        $('#pwerr').html("correct");
        signup.attr('action', 'PHPScripts/SignUpScript.php')
        return true;
    }
    else {
        $('#pwerr').html("passwords do not match");
        return false;
    }
}
