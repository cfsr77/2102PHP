<?php
    session_start();
    session_destroy();
    //$_SESSION = ARRAY();
    echo "ιεΊζε";
    header("refresh:1,url=03.html");

