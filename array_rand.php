<?php
    $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    echo '<pre>';print_r($arr);'</pre>'; 
    $k = array_rand($arr,3);                    //就他                
    echo '<pre>';print_r($k);'</pre>'; 

    echo "[0]:".$arr[$k[0]];echo "<br>";      //让上面索引的值 给显示出来
    echo "[1]:".$arr[$k[1]];echo "<br>";
    echo "[2]:".$arr[$k[2]];

    echo '<pre>';print_r($arr);echo '</pre>'; 
    $k = array_rand($arr);          //随机的key
    echo "随机的key是:"  .$k; echo "<br>";  
    echo $arr[$k];