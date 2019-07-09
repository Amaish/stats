$(document).ready(function($) {

    // start of signin agent

    $('#signinuser').click(function() {
        $('#signinuser').html('Signing In...');
        $('#signinuser').css("disabled", "1");


        var email = $('#email').val();
        var password = $('#password').val();
        //alert(email);

        $.post("core/exe/signinUser/", {

            email: email,
            password: password

        }, function(SigninFeedback) {
            if (SigninFeedback == "1") {
                // $('#silsresp').html('<font color="green">Account created...</font>');
                window.location.href = "#";
                $('#signinuser').html('Sign In');
                $('#signinuser').css("disabled", "0");
                console.log(SigninFeedback);
            } else {
                $('#silsresp').html('<font color="red">' + SigninFeedback + '</font>');
                $('#signinuser').html('Sign In');
                $('#signinuser').css("disabled", "0");
                console.log(SigninFeedback);
            }
        });
    });

    // end of agent signin
});
