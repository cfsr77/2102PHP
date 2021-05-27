<?php
    //表单验证

    
    if(empty($_POST)){
        die("没有提交数据！");
    }
    //首相先创建一个空数组
    $kong = [];
    //if判断input值不能为空
    foreach($_POST as $k => $v){
        $input = trim($v);   //去掉input值里的空格
        if(empty($input)){
            die ("内容不能为空！");
        }
        $kong[$k] = $input;
    }

    //获取用户名
    // $yhm = $_POST['u_m'];
    $yhmz = "/^\w{5,10}$/";   //正则
    if( !preg_match($yhmz,$kong['u_m']) ){      //preg_match   执行匹配正则表达式
        die ("用户名不匹配");
    }
    
    //手机号正则
    // $sjh = $_POST['u_sjh'];
    $sjhz = "/^[1][2356789]\d{9}$/";
    if( !preg_match($sjhz,$kong['u_sjh'])){
        die("手机号不匹配");
    };

    //密码
    // $mm = $_POST['u_mm'];
    $mmz = "/^\w{6,}$/";
    if( !preg_match($mmz,$kong['u_mm']) ){
        die("密码不匹配");
    };
    
    //确认密码
    // $qrmm = $_POST['u_qrmm'];
    if($kong['u_mm'] !=  $kong['u_qrmm']){
        die("确认密码不一致");
    }


    echo "提交成功！";