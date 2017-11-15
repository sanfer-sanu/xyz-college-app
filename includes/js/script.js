

//jQuery function calls
$(document).ready(function(){
    $('#submit').click(function(){
        
        var username = $('#username').val();
        var password = $('#password').val();
        if(username == null || username == ''){  
            $('#error').show();
            $('#error').html('Please fill the username.');
            return false;
        }
        if(password == null || password == '') {
            $('#error').show();
            $('#error').html('Please fill the password.');
            return false;
        }
    });

    /*
    $('#users-nav').click(function(){
        $.ajax({
            url : 'includes/php/users.php',
            type: 'POST',
            data: {
                action : 'users'
            },
            dataType: 'json',
            success: function( json ){
                alert("Success");
            }

        });

    });
    */

}); //end ready-function