<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-29
 * Time: 09:11
 */

    session_start();
    $idx = $_SESSION["index"];
    $dir = $_POST["dir"];
    $idx = $idx + $dir;
    if($idx < 1){
        $idx = 13;
    }
    if($idx > 13){
        $idx = 1;
    }
    $picString = "regatta-0";
    if ($idx < 10){
        $picString = $picString + "0" + $idx;
    }
    else{
        $picString = $picString + $idx;
    }
    //echo "http://cs325.colby.edu/kwahn/CS325MP/CS325MP/ASSETS/Regatta_pics/$images[$idx]" + " $" + $numOfnums;
    echo "http://cs325.colby.edu/kwahn/CS325MP/CS325MP/ASSETS/Regatta_pics/$picString.jpg";



?>