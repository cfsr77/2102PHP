<?php
        echo "<pre>"; print_r($_POST);echo "</pre>";

        $link = new mysqli("localhost","root","root","goods");
        
        $xm = trim($_POST['u_xm']);
        $nl = trim($_POST['u_nl']);
        $dz = trim($_POST['u_zz']);
        $sql = "insert into users(`userxm`,`usernl`,`userzz`)
        values ('$xm','$nl','$dz')";
        // if($nl<18){
        //     echo " $xm 年龄未成年";echo "<br>";
        // }
        
        $stmt = mysqli_prepare($link,$sql);
        $rsr = mysqli_stmt_execute($stmt); 
        if($rsr){
            echo "注册成功";
        }else{
            echo "注册失败";
        }
?>
        <table border="3px">
                <tr>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>地址</td>
                </tr>
                <tr>
                    <td><?php echo $xm; ?>
                    </td>
                    <td>
                        <?php
                            if($nl>18){
                                echo "成年";
                            }else{
                                echo "未成年";
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo $dz; ?>
                    </td>
                </tr>
        </table>