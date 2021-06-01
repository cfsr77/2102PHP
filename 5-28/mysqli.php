<?php
    // 创建连接
    // $link = new mysqli("localhost", "root", "root", "goods");
    // // 准备sql语句
    // $sql = "select * from xiaolx";
    // // 执行查询
    // $res = mysqli_query($link,$sql);
    // // 获取结果
    // $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo '<pre>';print_r($rows);echo '</pre>';

    //id 强制转换类型   列如输入11abc 他会显示11   abb 会显示0
    // $xiaoid = intval($_GET['id']);

    //获取name
    // $xiaoname = trim($_GET['name']);

    //根据jg找   trim去除空格
    // $xiaojg = trim($_GET['jg']);

    // $xiaosc = $_GET['sc'];
    // //创建链接 
    // $link = new mysqli("localhost","root","root","goods");
    
    // // var_dump($link);
    // // $sql = "select * from xiaolx where xiaoid='$xiaoid'";
    // // $sql = "select * from xiaolx where xiaoname='$xiaoname'";
    // // $sql = "select * from xiaolx where xiaojg='$xiaojg'";
    // $sql = "select * from xiaolx where xiaosc='$xiaosc'";
    // //执行一个查询
    // $result = mysqli_query($link,$sql);
    // // var_dump($result);

    // //获取记录
    // $gong = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // echo "<pre>"; print_r($gong); echo "</pre>";


    $xiaoname = $_GET['name'];
    //创建链接al
    $lin = new mysqli("localhost","root","root","goods");
    //获取xiaolx表中的值
    $sql = "select * from xiaolx where xiaoname='$xiaoname'";
    // var_dump($sql);
    //执行一个查询
    $res = mysqli_query($lin,$sql);
    // var_dump($res);
    //获取记录
    $gong = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // //格式化在网页显示   输出
    echo "<pre>";print_r($gong);echo "</pre>";
