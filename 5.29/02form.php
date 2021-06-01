<?php

    //开启session
    session_start();
    echo "<pre>";print_r($_POST);echo "</pre>";

    //链接到数据库
    include "ljshujuku.php";
    $yhmname = trim($_POST['yhm']);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $nl = trim($_POST['nl']);
    $mm = trim($_POST['mm']);
    $qrmm = trim($_POST['qrmm']);
    //密码加密
    $mima = password_hash($mm,PASSWORD_BCRYPT);
    $qrmima = password_hash($qrmm,PASSWORD_BCRYPT);

    //注册时间   需要有相应的表名
     $reg_time = time();    //把$reg_time 放到语句里
    $time = date("Y-m-d H:i:s",$reg_time);
    //语句
    $sql = "insert into biaotwo (`biaoname`,`biaoemail`,`biaosjh`,`biaonl`,`biaomm`,`biaoqrmm`,`add_time`)
    values ('$yhmname','$email','$tel','$nl','$mima','$qrmima','$time')";

    $sql_name = "select * from biaotwo where biaoname='{$yhmname}'";
    $query = mysqli_query($link,$sql_name);
    $verify = mysqli_fetch_all($query,MYSQLI_ASSOC);
    //    echo $sql_name;die;
    //判断用户名是否已重复
    if($verify){
        die ("用户名已重复！");
    }
    //SQL 语句
    $stmt = mysqli_prepare($link,$sql);
    // var_dump($stmt);
    $rse = mysqli_stmt_execute($stmt);
    // var_dump($rse);
    // var_dump($rse);die;
    if($rse){
        echo "注册成功";
    }else{
        echo "注册失败";
    }