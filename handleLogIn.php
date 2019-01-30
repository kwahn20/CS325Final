<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-30
 * Time: 11:29
 */

$checkUser = $_POST["userName"];
$checkPass = $_POST["password"];
$userName = 'kwslag20';
$password = 'hl8sd6hsr';
$database = 'kwslag20';
$sql = "select username from logins where username=".$checkUser." and password=".$checkPass;

try{
    $mySQLLink = new PDO("mysql:dbname=$database;host=localhost", "$userName", "$password");
    $statement = $mySQLLink->prepare($sql);
    $statement->execute(array("%$query%"));
    $data = $statement->fetchAll();
    echo json_encode($data);
}
catch(PDOException $ex){
    echo "$".$ex;
}

?>