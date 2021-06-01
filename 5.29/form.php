<?php
    echo "<pre>"; print_r($_POST);echo "</pre>";

    //链接到mysql
    $link = new mysqli("localhost","root","root","goods");
    $u_yhm = trim($_POST['u_yhm']);
    $u_jg = trim($_POST['u_jg']);
    $u_sj = trim($_POST['u_sj']);
    //sql语句
    $sql=  "insert into xiaolx (`xiaoname`,`xiaojg`,`xiaosj`)
    values ('{$u_yhm}','{$u_jg}','$u_sj')";
    
    //准备阶段
    $stmt = mysqli_prepare($link,$sql);

    //执行阶段
    $res = mysqli_stmt_execute($stmt);
    if($res){
        echo "insert 成功";
    }else{
        echo "insert 不成功";
    }