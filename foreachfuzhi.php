<?php
    $arr1 = [
        "name"  => " zhangsan ",
        "age"   => 11,
        "email" => "zhangsan@qq.com"
    ];
    $arr2 = [];
    //使用 foreach 生成一个新数组， 数组元素与 $arr1一致
    foreach($arr1 as $k=>$v){
        $arr2[$k] = $v;
    }
    echo '<pre>';print_r($arr2);echo '</pre>';