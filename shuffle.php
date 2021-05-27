<?php
    $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    echo '<pre>';print_r($arr);'</pre>';    //输出没打乱之前的 $arr
    shuffle($arr);                  //随机打乱数组  
    echo '<pre>';print_r($arr);'</pre>';    //输出打乱后的 $arr