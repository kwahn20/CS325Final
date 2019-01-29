<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 2019-01-29
 * Time: 09:11
 */

    $numOfnums = $_POST["idx"];
    $idx = (int)substr($numOfnums,0,2) + 1;
    $images = scandir("/web/docs/kwahn20/CS325MP/ASSETS/Regatta_pics/", 1);
    echo "http://cs325.colby.edu/kwahn/CS325MP/CS325MP/ASSETS/Regatta_pics/$images[$idx]" + " $" + "$idx" + substr($numOfnums, 2);



?>