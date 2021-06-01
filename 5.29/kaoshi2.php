<?php
    echo "<pre>"; print_r($_POST); echo "</pre>";
    //链接到数据库
    $link = new mysqli("localhost","root","root","goods");

    $xm = trim($_POST['u_xm']);
    $age = trim($_POST['u_nl']);
    $dz = trim($_POST['u_zz']);
    //获取表
    $sql = "insert into kong (`kongname`,`kongnl`,`kongdz`)
    values ('$xm','$age','$dz')";
    // echo $sql;die;    //确认是否有内容

    //准备阶段
    $stmt = mysqli_prepare($link,$sql);
    //执行
    $res = mysqli_stmt_execute($stmt);

    // if($res){
    //     echo "注册成功";
    // }else {
    //     echo "注册失败";
    // }
    
    $sql = "select * from kong";
    $st = mysqli_query($link,$sql);
    $sort = mysqli_fetch_all($st,MYSQLI_ASSOC);
?>
    <table border="1px">
            <thead>
                <tr>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>地址</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    foreach($sort as $k=>$v){
                        if($v['kongnl']<18){
                            $a = "未成年";
                        }else {
                            $a = "成年";
                        }
                        echo "<tr>";
                            echo "<td> {$v['kongname']} </td>";
                            echo "<td> {$a} </td>";  
                            echo "<td> {$v['kongdz']} </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
    </table>