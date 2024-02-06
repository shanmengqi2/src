<?php
$servername = "php24-db-1";
$username = "shanmengqi";
$password = "123456";
$dbname = "shanmengqi";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn -> connect_error){
    die("Connection Faild:" . $conn -> connect_error);


}

?>