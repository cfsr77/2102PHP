<?php
    session_start();
    session_destroy();
    //$_SESSION = ARRAY();
    echo "退出成功";
    header("refresh:1,url=03.html");

