<?php
    echo "<pre>"; print_r($_POST);echo "</pre>";

    //链接数据
    $link = new mysqli("localhost","root","root","goods");
    $biaoname = trim($_POST['yhm']);
    $biaotel = trim($_POST['tel']);
    $biaonl = trim($_POST['nl']);
    $biaomm = trim($_POST['mm']);
    $biaoqrmm = trim($_POST['qrmm']);
    $jmmm = password_hash($biaomm,PASSWORD_BCRYPT);
    $qrjmmm = password_hash($biaoqrmm,PASSWORD_BCRYPT);
    //链接到数据库中的表
    $sql = "insert into biao (`biaoname`,`biaosjh`,`biaonl`,`biaomm`,`biaoqrmm`) 
    values ('$biaoname','$biaotel','$biaonl','$jmmm','$qrjmmm')";
    //准备阶段
    $stmt = mysqli_prepare($link,$sql);
//    echo $stmt;die;
    //执行阶段
    $res = mysqli_stmt_execute($stmt);
    //if判断是否注册成功
    if ($res){
        echo "注册成功";
    }else {
        echo "注册失败";
    }