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
<form action="processRegLogin.php" name="register" method="post">
    <label>用户名：
    <input type="text" name="username" placeholder="请输入用户名" required></label>
    <label>
        密码：<input type="password" name="pass1">
        再次输入密码：<input type="password" name="pass2">
    </label>
    <input type="submit" name="sub1" value="注册">
</form>

<br><br>

<form action="processRegLogin.php" name="login" method="post">
    <label>用户名：
        <input type="text" name="username" placeholder="请输入用户名" required></label>

    <label>
            密码：<input type="password" name="pass">
    </label>

    <input type="submit" name="sub2" value="登录">

</form>

</body>
</html>
<?php
