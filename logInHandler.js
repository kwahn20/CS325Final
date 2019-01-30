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
    })

    $('#submitButton').click(function(){
       $.ajax({
           type: 'POST',
           data: {userName: $("#userName").val(), password: $("#password").val() },
           url: 'http://cs325.colby.edu/kwahn20/CS325MP/handleLogIn.php',
           success: function(data) {
               if(data == null){
                   document.getElementById("logInForm").innerHTML = document.getElementById("logInForm").innerHTML + "<p>Incorrect Username or Password</p>";
               }
               else{
                   window.location = 'http://cs325.colby.edu/kwahn20/CS325MP/loggedIn.html';
               }
           }
       })

    });
});