<?php


global $conn;
include 'db.php';


if(isset($_POST['sub1'])){
    $userName = $_POST['username'];
    $pass1 = $_POST['pass1'];
    $email = $_POST['email'];


        $sql = "insert into userInfo (user_name,password,email) values ('$userName','$pass1','$email')";

        if ($conn -> query($sql) === TRUE){
            echo "Your data was recorded";
        }
        else {
            echo "Error :" . $sql . "<br>" . $conn->error;
        }

        $conn -> close();


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
