<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td></td>
        </tr>
    </table>
        <!-- <ul>
            <li>AAAAA</li>
            <li>AAAAA</li>
            <li>AAAAA</li>
            <li>AAAAA</li>
            <li>AAAAA</li>
        </ul> -->
        
        <?php
            // $list = [
            //     'abcdef',
            //     'AAAAA',
            //     'BBBBB',
            //     'CCCCC',
            //     'DDDDD',
            //     'EEEEE'
            // ];
            // echo "<pre>";
            // echo var_dump($list);
            // echo "</pre>";
            // echo '$k' . $k 
            
        ?>

        <ul>
            <?php

                // foreach($list as $k=>$v){
                //     echo "<li>" . $v . "</li>";
                // }
                // $length = count($list);
                // for($i=0;$i<$length;$i++){
                //     echo "<li>".$list[$i]."</li>";
                // }

                
                
            ?>
        </ul>

        <table border="4px">
            <?php
                //表格
                $list = [
                    ["name"=>"姓名","age"=>"年龄","email"=>"Email"],
                    ["name"=>"张三","age"=>"至今未知","email"=>"zhangsan@qq.com"],
                    ["name"=>"王志献","age"=>"18","email"=>"lisi@qq.com"],
                    ["name"=>"赵四","age"=>33,"email"=>"wangwu@qq.com"],
                    ["name"=>"潘长江","age"=>44,"email"=>"zhaoliu@qq.com"],
                ];
                
                foreach($list as $k=>$v){
                    echo "<tr>
                            <td>". $v['name'] ."</td>"."<td>" .$v['age']."</td>"."<td>" .$v['email']."</td>"."
                        </tr>";
                }
            ?>
        </table>

</body>
</html>