<?php
    //开启session
    session_start();

    $link = new mysqli("localhost","root","root","goods");
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    //直接把时间戳转为  年  月  日
    $num = date("Y-m-d H:i:s",time());
    $sql = "select * from biaotwo where biaoname='{$name}' or biaoemail='{$name}' or biaosjh='{$name}'";
    // echo $sql; die;
    $stmt = mysqli_query($link,$sql);
    $stt = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
//    print_r($stt);die;
    //验证用户名
    if(empty($stt)){
        die ("查无此人");
    }
    //验证密码
    $numm = password_verify($pass,$stt[0]['biaomm']);
    //if判断 密码正确就执行if   不正确则执行else
    if($numm){
        //获取用户登录信息
        $pppid = $stt[0]['biaoid'];     //获取id
        $ppp_time = $num;           //获取时间戳 年月日
        $ppp_ip = $_SERVER['REMOTE_ADDR'];      //获取用户ip
        $ppp_ua = $_SERVER['HTTP_USER_AGENT'];  //获取用户ua
        //找到数据库中的  ppp表
        $sql = "insert into ppp (`datauid`,`datatime`,`dataip`,`dataua`)    
                values ('$pppid','$ppp_time','$ppp_ip','$ppp_ua')";
        $stmt = mysqli_prepare($link,$sql);
        $ttt = mysqli_stmt_execute($stmt);


        echo "登录成功";echo "<br>";
        //将用户信息保存到会话中 分别存   姓名  邮箱   手机号
        $_SESSION['biaoname'] = $stt[0]['biaoname'];
        $_SESSION['biaoemail'] = $stt[0]['biaoemail'];
        $_SESSION['biaosjh'] = $stt[0]['biaosjh'];
        //登录成功后让他自动跳转到  gong.php  页面
        header("refresh:2,url=5-31.php");
    }else{
        echo "登录失败 密码错误";echo "<br>";
    }

