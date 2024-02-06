<?php


global $conn;
include 'db.php';


if(isset($_POST['sub1'])){
    $userName = $_POST['username'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 != $pass2){
        echo "两次输入的密码不一致，请重新输入！";
    }
    else{
        $sql = "insert into userInfo (user_name,password) values ('$userName','$pass2')";

        if ($conn -> query($sql) === TRUE){
            echo "Your data was recorded";
        }
        else {
            echo "Error :" . $sql . "<br>" . $conn->error;
        }

        $conn -> close();

    }
}


if(isset($_POST['sub2'])){

    $userName = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "select * from userInfo where user_name = '$userName' AND password='$pass'";

    $result = $conn ->query($sql);

    if($result -> num_rows >0){
        echo "Welcome " . $userName;
    }
    else{
        echo "get out!" . $userName . $pass;
    }

    $conn -> close();


}
