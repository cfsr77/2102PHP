<?php
    // $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    // echo '<pre>';print_r($arr);'</pre>'; 
    // $k = array_rand($arr,3);                    //就他                
    // echo '<pre>';print_r($k);'</pre>'; 

    // echo "[0]:".$arr[$k[0]];echo "<br>";      //让上面索引的值 给显示出来
    // echo "[1]:".$arr[$k[1]];echo "<br>";
    // echo "[2]:".$arr[$k[2]];

    // echo '<pre>';print_r($arr);echo '</pre>'; 
    // $k = array_rand($arr);          //随机的key
    // echo "随机的key是:"  .$k; echo "<br>";  
    // echo $arr[$k];

    $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    echo "<pre>"; print_r($arr); echo "<pre>";
    //从数组中随机取出一个或多个随机键
    $sji = array_rand($arr,1);
    echo "<pre>"; print_r($sji); echo "<pre>";      //echo 获取他对应的下标索引
    echo $arr[$sji];  
    //随机数


    // echo "[0]" . $arr[$sji[0]];echo "<br>";
    // echo "[1]" . $arr[$sji[1]];echo "<br>";
    // echo "[2]" . $arr[$sji[2]];echo "<br>";


