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
<form name="register" method="post">
    <label>用户名：
    <input type="text" name="username" placeholder="请输入用户名" required></label><br>
    <label for="email">Email:</label><input type="email" id="email" name="email" onblur="emailValidate()"><br>
    <span id="emailError"></span><br>
    <label>
        密码：<input type="password" name="pass1" id="pass1">
        再次输入密码：<input type="password" name="pass2" id="pass2" onblur="passwordValidate()"><br>
        <span id="passError"></span><br>
    </label>

    <input type="submit" name="sub1" value="注册" onclick="submitForm(this)">
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

<script>
    function emailValidate(){
        const pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let email = document.getElementById("email").value;
        if(pattern.test(email)){
            document.getElementById("emailError").innerHTML = "it's ok";
            return true;
        }
        else {
            document.getElementById("emailError").innerHTML = "格式错误";
            return false;
        }
    }
    function passwordValidate(){
        let pass1 = document.getElementById("pass1").value;
        let pass2 = document.getElementById("pass2").value;
        if(pass1 === pass2){
            document.getElementById("passError").innerHTML ="输入一致，ok";
            return true;
        }
        else{
            document.getElementById("passError").innerHTML = "输入不一致，请重新输入";
            return false;
        }
    }

    function submitForm(submitButton){
        if(emailValidate() && passwordValidate()){

            submitButton.form.action = "processRegLogin.php";
        }
        else{
            alert("输入信息有误，请重新输入");
        }
    }

    function submitFormEasy(){

    }

    function submitFormEasyToo(){



    }
</script>
</body>
</html>
<?php
