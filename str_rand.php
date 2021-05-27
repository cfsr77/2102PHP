<?php
    //随机字符串 
    //$length  是字符串的长度
    function str_rand($length=5){
        //创建一个字符串
        $zifu = 'ABCDEFGHIJKMNPQRSTYVWXYZabcdefghijkmnpqrstuvwxyz23456789';
        //创建一个空的字符串
        $str = "";
        //for循环
        for($i=0;$i<$length;$i++){
            //随机数
            $num = mt_rand(0,55);
            echo "随机数:" . $num; echo "<br>";
            //随机字母 
            echo "随机字母:" . $zifu[$num]; echo "<br>";
            //把随机数 $num是下标 $zifu是值  给到提前创建好的空字符串里  
            $str.= $zifu[$num];        
        }
        //返回值 返回 $str
        return $str;    
    }
    //调用这个函数  str_rand   
    var_dump(str_rand());  