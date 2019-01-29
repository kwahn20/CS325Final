<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-29
 * Time: 09:11
 */

    $numOfnums = $_POST["idx"];
    $dir = $_POST["dir"];
    $images = scandir("/web/docs/kwahn20/CS325MP/ASSETS/Regatta_pics/", 1);
    $idx = (int)substr($numOfnums,0,2) + $dir;
    if($idx < 1){
        $idx = 1;
    }
    if($idx > (count($images) - 3)){
        $idx = (count($images) - 3);
    }
    $numOfnums = ($idx + 1) + "/" + (count($images) - 2);
    $images = scandir("/web/docs/kwahn20/CS325MP/ASSETS/Regatta_pics/", 1);
    echo "http://cs325.colby.edu/kwahn/CS325MP/CS325MP/ASSETS/Regatta_pics/$images[$idx]" + " $" + $numOfnums;



?>