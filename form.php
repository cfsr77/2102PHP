<?php
    echo '<pre>'; print_r($_POST);'<pre>';

    //获取用户名
    $yhm = $_POST['u_m'];
    $yhmz = "/^\w{5,10}$/";   //正则
    if( !preg_match($yhmz,$yhm) ){      //preg_match   执行匹配正则表达式
        echo "用户名不匹配";echo "<br>";
    }
    
    //手机号正则
    $sjh = $_POST['u_sjh'];
    $sjhz = "/^[1][2356789]\d{9}$/";
    if( !preg_match($sjhz,$sjh)){
        echo "手机号不匹配";echo "<br>";
    };

    //密码
    $mm = $_POST['u_mm'];
    $mmz = "/^\w{6,}$/";
    if( !preg_match($mmz,$mm) ){
        echo "密码不匹配";echo "<br>";
    };
    
    //确认密码
    $qrmm = $_POST['u_qrmm'];
    if($mm != $qrmm){
        echo "确认密码不一致";
    }