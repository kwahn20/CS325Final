<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-30
 * Time: 14:11
 */
if ($_POST) {
    /*Grabs the information from the form from the HTML*/
    $nameInput = $_POST['userName'];
    $emailInput = $_POST['emailAddress'];


    $userName = 'kwahn20';
    $password = '';
    $database = 'kwahn20';
    $sql = "select password from logins where username='".$checkUser."' and password='".$checkPass."';";

    try{
        $mySQLLink = new PDO("mysql:dbname=$database;host=localhost", "$userName", "$password");
        $statement = $mySQLLink->prepare($sql);
        $statement->execute(array("%$query%"));
        $data = $statement->fetchAll();
    }
    catch(PDOException $ex){
        echo "Server Error";
    }

    $finalMsg = "Name: " . $nameInput;
    $finalMsg .= "\nEmail: " . $emailInput;
    $finalMsg .= "\nOld Password: " . $data[0][0];
    $finalMsg = wordwrap($finalMsg, 70, "\r\n");
    mail("$emailInput","Password Retrieval:",$finalMsg);
    header("Location: http://cs325.colby.edu/kwahn20/Marquis_Properties/contact.html");
}


?>