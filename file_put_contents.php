<?php
    $f = "./test";
    $de = "FFFF";
    //追加写
    // echo file_put_contents($f,$de,FILE_APPEND);
    echo file_put_contents("$f","$de",FILE_APPEND);
    //清空写
    // echo file_put_contents($f,$de);