<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Book Now</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="loginHandler.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" type="text/css" href="dropdownMenu.css" />
</head>
<body>
<div id="rightPanel"></div>
<div id="toolBarBox" class="hidden"></div>
<div id="NavBar">
    <div class="mainTitle">
        <a href="homepage.html">Marquis Properties</a>
    </div>
    <div class="navigationBar" >
        <div class="dropdown">
            <button class="dropbtn">Properties</button>
            <div class="dropdown-content">
                <a href='naplesPropertyPage.html'>Naples</a>
                <a href="#">Michigan</a>
            </div>
        </div>
        <a href="BookNowPage.html">Book Now</a>
        <a href="contact.html">Contact</a>
        <a href="aboutPage.html">About</a>
    </div>
</div>

<br/><br/><br/><br/><br/><br/>

<div id="changeable">
    <fieldset id='logInForm'>
        <legend>Log in</legend>
        <form class="LogInValidation" action="handleLogin.php" method="post">
            Name: <input type="text" name="userName" placeholder="Enter Your Name"><br /><br />
            Password: <input type="text" name="password" placeholder="Enter Your Password"><br /><br />
            <input type="submit" value="Submit">
        </form>
    </fieldset>
</div>
<div class="positioning">
    <button id="loginButton">Log In</button>
    <button id="newUserButton">Create New User</button>
    <button id="forgotButton">Forgot Password</button>
</div>

<br/><br/><br/>
<div id='calendarInfo'>
    <form action="/action_page.php">
        Check In: <input type="date" name="checkin">
        Check Out: <input type="date" name="checkout">
        <input type="submit">
    </form>
</div>

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
$sql = "select first_name from logins where username=''".$checkUser."' and password='".$checkPass;

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

if($data != null){
    echo "<p class='welcome'>Welcome ".$data."</p>";
}
else{
    header("Location: http://cs325.colby.edu/kwahn20/CS325MP/BookNowPage.html");
}

?>


</body>
</html>
