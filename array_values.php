<?php
    $arr = [
        "name"=>"zhangsan",
        "age"   => 11,
        "email" => "zhangsan@qq.com"
    ];
    $value = array_values($arr);        //返回上面数组中所有的值 单词为：array_values
    echo "<pre>";print_r($value); echo "</pre>";    //pre 页面格式化

    //这是简化代码 一步完成
    // echo "<pre>";var_dump(array_values($arr));echo "</pre>";   //var_dump一种 还有一种print_r
    