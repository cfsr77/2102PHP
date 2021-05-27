<?php
    $str = "a-b-c-d-e";

    //将字符串转换为数组
    echo "<pre>"; print_r($str); echo "</pre>";
    $r = explode("-",$str);
    echo "<pre>"; print_r($r); echo "</pre>";
