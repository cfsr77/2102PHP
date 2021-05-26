<?php
    $arr1 = [123,456,789,11,22,33,'a','b','c'];
    // echo $arr1;
    //$v 是上面数组的值  $k 是上面数组的下标
    // foreach($arr1 as $k=>$v){
    //     echo '$k=' .$k . '=' . $v . "\n";
    // }

        //sldkfjsdkljfjklsd
    //for循环获取数组的长度
    $length = count($arr1);
    for($i=0;$i<$length;$i++){
        echo 'i=' .$i , '>>>' . $arr1[$i] . "\n";
    }