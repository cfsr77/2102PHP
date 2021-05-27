<?php
    $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];

    
    echo '<pre>';print_r($arr);'</pre>';    //先输出没排序前的$arr
    echo sort($arr);                        //对数组进行排序 单词sort 
    echo '<pre>';print_r($arr);'</pre>';    //输出排序完后的$arr
    