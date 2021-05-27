<?php
    $arr = ["zhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    // 判断元素是否存在数组中   单词  in_array
    $bb = "zhangsan";
    if(in_array($bb,$arr)){
        echo "$bb 存在";
    }else {
        echo "$bb 不存在";
    }
    