<?php
    //$arr1   以下是多维数组
    $arr1 = [
        ["name"=>"zhangsan","age"=>"18","emeil"=>"zhangsan@qq.com"],
        ["name"=>"lisi","age"=>"11","emeil"=>"lisi@qq.com"],
        ["name"=>"haha","age"=>"12","emeil"=>"haha@qq.com"],
        ["name"=>"enen","age"=>"21","emeil"=>"enen@qq.com"],
    ];
    //返回数组中指定的一项 单词array_column           
    $namee = array_column($arr1,"name");    //取出多维数组的  name
    $ages = array_column($arr1,"age");   //取出多维数组的  age
    $emeils = array_column($arr1,"emeil");  //取出多维数组的  emeil
    echo "<pre>";print_r($namee); echo "</pre>";    //返回指定name
    echo "<hr>";        //水平线
    echo "<pre>";print_r($ages); echo "</pre>";     //返回指定age  
    echo "<hr>";        //水平线
    echo "<pre>";print_r($emeils); echo "</pre>";   //返回指定emeil