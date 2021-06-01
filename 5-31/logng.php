<?php
    //开启会话
    session_start();
    if(isset($_SESSION['biaoname'])){
        $biaoname = $_SESSION['biaoname'];
        echo "你好  $biaoname  欢迎登录";echo "<br>";
        $biaosjh = $_SESSION['biaosjh'];
        echo "您的手机号:   $biaosjh";
        $biaosnl = $_SESSION['biaosnl'];
        echo "您的手机号:   $biaosnl";
    }else {
        echo "请先登录";
    }
