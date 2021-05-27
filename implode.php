<?php
    $arr = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

    //将数组转换为字符串 
    $str = implode($arr);       
    echo "<pre>";print_r($str);echo "</pre>";   
    
    //将数组转换为字符串  简写方式
    // echo "<pre>"; print_r(implode($arr)); echo "</pre>";