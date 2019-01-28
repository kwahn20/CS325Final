<?php 
$contents = file_get_contents("contact.html");

/*Grabs the information from the form from the HTML*/
$nameInput = $_POST['userName'];
$emailInput = $_POST['email'];
$commentInput = $_POST['commentContent'];

$finalMsg = "Name: ".$nameInput;
$finalMsg .= "\nEmail: ".$emailInput;
$finalMsg .= "\nMessage Content: ".$commentInput;
$finalMsg = wordwrap($finalMsg, 70, "\r\n");

//mail('kwahn16yootube@gmail.com',"Marquis Properties Contact:",$finalMsg);
echo file_get_contents("contact.html");

?>

