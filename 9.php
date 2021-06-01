<?php
    // $num1 = 1;
    // for($i=1;$i<=9;$i++){
    //     $num2 = $num1++;
    //     for($j=1;$j<$num3;$j++){
    //         $num4 = $num2 * $num3;
    //         echo $num4 = "$num1" . "*" . $num3 . "=" . $num4;
    //     }
    //     echo "<br>";
    // }
echo '<table>';
    for($i=1; $i<=9; $i++){
        echo '<tr>';
        for($j=1; $j<=$i; $j++){
            $num1 = $i*$j;                              
            echo '<td style ="border: 2px solid red">' . $j . '*' . $i . '=' ."$num1" . '</td>';
            // echo "<pre>"; "*"; echo"</pre>";
        }
        echo '</tr>';
    }
    echo '</table>';

    // $arr1 = [
    //     "name"  => " zhangsan ",
    //     "age"   => 11,
    //     "email" => "zhangsan@qq.com"
    // ];
    // $arr2 = [];
    // //使用 foreach 生成一个新数组， 数组元素与 $arr1一致
    // foreach($arr1 as $k=>$v){
    //     $arr2[$k] = $v;
    // }
    // echo '<pre>';print_r($arr2);echo '</pre>';

    // create table xiaolxtwo (
    //     `xiaoid` int unsigned auto_increment primary key,
    //     `xiaoname` varchar(64),
    //     `xiaojg` varchar(64),
    //     `xiaosj` timestamp,
    //     `xiaolll` varchar(64),
    //     `xiaosc` char(1)
    //     );




    // a-b = 80;
    // a/b = 50;
