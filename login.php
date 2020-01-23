<?php

session_start();
$con = mysqli_connect('localhost','root');
if($con){
    echo"connection successfull";
}
else{
    echo"no connection";
}

mysqli_select_db($con,'myntra');

$name = $_POST['user'];
$pass = $_POST['password'];

$query   = "select userid, password from record2 where userid = '$name' && password = '$pass' ";
$query2  = "select firstname from record2 where userid = '$name' && password = '$pass' ";
$result = mysqli_query($con, $query);
$result2 = mysqli_query($con, $query2);
$row = mysqli_fetch_array($result2);
$data = $row[0];


$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $data;
    $_SESSION['userid'] = $name;
    header('location:index2.php');
    
}
else{
    header('location:index.php');

}









?>