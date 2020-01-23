<?php

session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root');
if($con){
    echo"connection successfull";
}
else{
    echo"no connection";
}

mysqli_select_db($con, 'myntra');

$name      = $_POST['user'];
$pass      = $_POST['password'];
$firstname = $_POST['fname'];
$lastname  = $_POST['lname'];
$email     = $_POST['emailid'];

$query = "select userid, password from record2 where userid = '$name' && password = '$pass' ";
$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"duplicate data";
}
else{
$qy= "insert into record2(firstname , lastname, userid, email, password) values( '$firstname', '$lastname','$name', '$email', '$pass')";
mysqli_query($con, $qy);

}









?>