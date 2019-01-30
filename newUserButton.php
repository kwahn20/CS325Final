<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-30
 * Time: 11:16
 */

$newUserForm = " <legend>New User</legend>
    <form class=\"NewUser\">
        First Name: <input type=\"text\" name=\"newFirstName\" placeholder=\"Enter Your First Name\"><br /><br />
        Last Name: <input type=\"text\" name=\"newLastName\" placeholder=\"Enter Your Last Name\"><br /><br />
        Username: <input type=\"text\" name=\"newUserName\" placeholder=\"Enter a Username\"><br /><br />
        Email: <input type=\"text\" name=\"newEmailAddress\" placeholder=\"Enter a Email\"><br /><br />
        Password: <input type=\"text\" name=\"newPassword\" placeholder=\"Enter a Password\"><br /><br />
        Reenter Password: <input type=\"text\" name=\"newPasswordReenter\" placeholder=\"Reenter Your Password\"><br /><br />
        <button id=\"submitNewUser\">Submit</button>
    </form> ";

echo $newUserForm;

?>