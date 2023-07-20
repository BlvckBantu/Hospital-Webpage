<?php
session_start();
header('location:fine.php');

$con=mysqli_connect('localhost','root', '');

mysqli_select_db($con,'Hospital');

$email=$_POST['Email'];
$message=$_POST['Message'];

$s="select * from data where Email='$email'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
   echo"Username already taken";
  

}else{
    $reg="insert into data(Email, Message) values ('$email','$message')";
    mysqli_query($con,$reg);
    echo"Successful Registration!";
}

?>








