<?php
    session_start();
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";
    if(isset($_SESSION['biaoname'])){
        $biaoname = $_SESSION['biaoname'];
        echo "你好  $biaoname  欢迎登录";echo "<br>";
        $biaoemail = $_SESSION['biaoemail'];
        echo "您的邮箱:   $biaoemail";echo "<br>";
        $biaosjh = $_SESSION['biaosjh'];
        echo "您的手机号:   $biaosjh";echo "<br>";
        $add_time = $_SESSION['add_time'];
        echo "您的登录时间:   $add_time";echo "<br>";
    }else{
        echo "请先登录";
        header("refresh:1,url=03.html");
    }

