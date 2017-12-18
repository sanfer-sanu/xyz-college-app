

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

function deleteFile(id, filename, type) {

    if(filename != null || filename != '') {
        if(confirm('Are you sure you want to delete the selected file?')) {
            $.ajax({
                url:'/plexus/includes/php/delete.php',
                type: 'POST',
                data: {
                    filename: filename,
                    type: type
                },
                success: function(data) {
                    if(data == 'Qsuccess') {
                        alert("File Deteted Successfully!");
                        window.location.href= '/plexus/includes/php/questions.php';
                    } else if(data == 'Ssuccess') {
                        alert("File Deteted Successfully!");
                        window.location.href= '/plexus/includes/php/syllabus.php';
                    } else {
                        alert("There is an error deleting this file. Please contact the admin support!");
                        console.log(data);
                    }
                }
        
            });
        }
    }
    
    
}
