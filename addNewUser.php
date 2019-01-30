<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-30
 * Time: 13:57
 */

$newFirstName = $_POST["newFirstName"];
$newLastName = $_POST["newLastName"];
$newUserName = $_POST["newUserName"];
$newEmailAddress = $_POST["newEmailAddress"];
$newPassword = $_POST["newPassword"];

$userName = 'kwahn20';
$password = '';
$database = 'kwahn20';
$sql = "insert into logins values('".$newUserName."','".$newPassword."','N','".$newFirstName."','".$newLastName."','".$newEmailAddress."');";

try{
    $mySQLLink = new PDO("mysql:dbname=$database;host=localhost", "$userName", "$password");
    $statement = $mySQLLink->prepare($sql);
    $statement->execute(array("%$query%"));
    $data = $statement->fetchAll();
    echo "This worked";
}
catch(PDOException $ex){
    echo "Server Error";
}
?>