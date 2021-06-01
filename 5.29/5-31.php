<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="./gong.php">个人中心</a><br>
                    <?php

                    //个人中心页面
                    //开启session
                    session_start();
                    $biaoname = $_SESSION['biaoname'];
                    //把会话里的值输出出来
                    //    echo "<pre>";
                    //    print_r($_SESSION);
                    //    echo "</pre>";
                    echo "你好 $biaoname 欢迎登录";
                    ?><br>
<a href="t.php">退出登录</a>
<br>
</body>
</html>




