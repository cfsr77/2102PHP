<?php
    //截取字符串
    $str = 'hello happy blur';


    //将字符串转为数组  
    // var_dump(str_split($str));

    //随机打乱字符串    单词是：str_shuffle
    // echo str_shuffle($str);
    
    //获取字符串的长度     单词是：strlen  strlen
    // echo strlen($str);
    
    //先给他转为大写    下面再给他转为小写
    // echo strtoupper($str);
    // echo "\n";
    //将字符串转为小写  strtolower   strtolower
    // echo strtolower($str);

    //将字符串转为大写 strtoupper strtoupper
    // echo strtoupper($str);

    //将每个单词的首字母转换为大写  ucwords ucwords ucwords
    // echo ucwords($str); 

    //将首字母转换为大写    ucfirst  ucfirst  将首字母转换为大写
    // echo ucfirst($str);

    //去除两边空格  trim
    // echo trim($str).'hh';

    //去除右边空格 ltrim
    // echo rtrim($str).'aa';

    //去除左边空格 rtrim
    // echo ltrim($str);

    //计算字符串的散列（哈希）值返回32为或16位  md5
    // echo md5($str);

    //2是从哪里开始  3是要截取的个数
    // echo substr($str,2,3);

    //负数是从后往前截取
    // echo substr($str,-3);

    


    //调用 time() 函数 获取unix时间戳
    // echo time();

    // //php中的换行 必须使用双引号 
    // echo "\n";

    // //显示当前文件的 决对路径
    // echo __FILE__;
    // echo "\n";

    // //显示当前的行号            
    // echo __LINE__;
    // echo "\n";

    // //var_dump 输出和带有变量类型       打印变量的相关信息
    // var_dump(1234);
    // echo "\n";

    // //echo 是直接输出
    // echo 1,2,3,4;

    // $a = 1;
    // $b = $a;
    // $b = 2;
    // echo $a;


    // function add($num1,$num2){
    //     return $num1 + $num2;
    // }
    // $a = 10;
    // $b = 20;
    // $c = add($a,$b);
    // //使用单引号字符串 原样输出
    // echo '$a + $b = ' . $c;
    // echo "\n";
    // //使用双引号字符串会解析变量
    // echo "$a + $b = " .$c;