<?php

global $conn;
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city  = $_POST['city'];
    $groupid = $_POST['groupid'];



}
include 'db.php';

$sql = "insert into studentinfo(first_name, last_name, city, groupId) 
values ('$fname','$lname','$city','$groupid')";


if ($conn -> query($sql) === TRUE){
    echo "Your data was recorded";
}
else {
    echo "Error :" . $sql . "<br>" . $conn->error;
}

$conn -> close();