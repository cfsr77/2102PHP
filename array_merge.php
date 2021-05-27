<?php
    $arr1 = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    $arr2 = ["a","b","c","d"];
    echo '<pre>';print_r($arr1);'<pre>';
    echo '<pre>';print_r($arr2);'<pre>';
    //合并上面两个数组   他会把合并好的数组 返回给一个新的数组 给到  $arr3
    $arr3 = array_merge($arr1,$arr2);       
    echo '<pre>';print_r($arr3);'<pre>';    