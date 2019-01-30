<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-30
 * Time: 11:07
 */

$forgotPasswordForm = " <legend>Forgot Password</legend>
    <form class=\"LogInValidation\" action=\"Lab10_kwslag20.php\" method=\"post\">
        Username: <input type=\"text\" name=\"userNameForgot\" placeholder=\"Enter Your Username\"><br /><br />
        Email: <input type=\"text\" name=\"emailAddress\" placeholder=\"Enter Your Email\"><br /><br />
        <button id=\"submitForgotButton\">Submit</button>
    </form> ";

echo $forgotPasswordForm;




?>