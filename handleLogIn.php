<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="Lab10_kwslag20.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cs325.colby.edu/kwslag20/Lab10/Lab10_kwslag20.js"></script>
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>Lab 10</title>
</head>
<body>

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
$sql = "select first_name from logins where username=".$checkUser." and password=".$checkPass;

try{
    $mySQLLink = new PDO("mysql:dbname=$database;host=localhost", "$userName", "$password");
    $statement = $mySQLLink->prepare($sql);
    $statement->execute(array("%$query%"));
    $data = $statement->fetchAll();
}
catch(PDOException $ex){
    echo "Server Error";
}

if($data != null){
    echo "<p class='welcome'>Welcome ".$data."</p>";
}
else{
    header("Location: http://cs325.colby.edu/kwahn20/CS325MP/BookNowPage.html");
}

?>


</body>
</html>
