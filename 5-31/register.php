<?php
    //开启会话
    session_start();
    //先显示在网页中
    echo "<pre>";print_r($_POST);echo "</pre>";
    //找到数据库 localhost
    include "ljshujuku.php";
    $name = $_POST['biaoname'];
    $pass =$_POST['biaopass'];
    //查找biao表 中的值
    $sql = "select * from biao where biaoname='{$name}' or biaosjh='{$name}'";
    $stmt = mysqli_query($link,$sql);
    $rst = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    //验证用户名   empty单词检测一个变量是否为空
    if(empty($rst)){
        die ("查无此人");       //如果没有这个用户名 从这里以后的代码将不会执行
    }
    //找到密码表中的密码和我登录输入的密码    password_verify 验证密码是否和撒列值匹配
    $mima = password_verify($pass,$rst[0]['biaomm']);
    if($mima){
        //获取用户登录信息
//        $pppid = $rst[0]['biaoid'];
        echo "登录成功";
        //获取用户名
        $_SESSION['biaoname'] = $rst[0]['biaoname'];
        //获取手机号
        $_SESSION['biaosjh'] = $rst[0]['biaosjh'];
        //跳转到log.php页面
        header("location:log.php");


    }else {
        echo "密码错误，请重新登录!";
    }

