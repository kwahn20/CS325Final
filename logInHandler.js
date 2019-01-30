$(document).ready(function(){
    $('#forgotPassword').click(function(){
        $.ajax({
            type: 'POST',
            url: 'http://cs325.colby.edu/kwahn20/CS325MP/forgotPassword.php',
            success: function(data) {
                document.getElementById("logInForm").innerHTML = data;
            }
        });
    });

    $('#newUserButton').click(function(){
        $.ajax({
           type: 'POST',
            url: 'http://cs325.colby.edu/kwahn20/CS325MP/newUserButton.php',
            success: function(data) {
               document.getElementById("logInForm").innerHTML = data;
            }
        });
    });
});