<?php
    $arr = ["Azhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    // var_dump(in_array("lisi",$arr));        //检查数组中是否存在某个值  有返回true  没有返回false
    $name = 'Zhaoliu';
    if( in_array($name,$arr) ){
        echo "$name 存在";
    }else {
        echo "$name 不存在";
    }