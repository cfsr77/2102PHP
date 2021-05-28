<?php
    $arr = ["zhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
    // 判断元素是否存在数组中   单词  in_array
    $bb = "zhangsan";
    if(in_array($bb,$arr)){
        echo "$bb 存在";
    }else {
        echo "$bb 不存在";
    }
    echo "<hr>";
    

    $arr1 = [123,214,213,56,33,11,789,'a','hello',"php"];
    $arr2 = [
        "name"  => "zhangsan",
        "age"   =>  22,
    ];
    //把$arr1数组的个数 放到$length 里面
    $length = count($arr1);
    //通过for循环循环他的个数
    for($i=0;$i<$length;$i++){
        echo 'i=' . $i , '>>>' . $arr1[$i]. '<br>';
    }