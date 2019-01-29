<?php
if ($_POST) {
    /*Grabs the information from the form from the HTML*/
    $nameInput = $_POST['userName'];
    $emailInput = $_POST['email'];
    $commentInput = $_POST['commentContent'];

    $finalMsg = "Name: " . $nameInput;
    $finalMsg .= "\nEmail: " . $emailInput;
    $finalMsg .= "\nMessage Content: " . $commentInput;
    $finalMsg = wordwrap($finalMsg, 70, "\r\n");
    mail('kwahn16yootube@gmail.com',"Marquis Properties Contact:",$finalMsg);
    header("Location: http://cs325.colby.edu/kwahn20/Marquis_Properties/contact.html");
}
?>

