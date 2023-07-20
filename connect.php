<?php
session_start();
header('location:Hospital.html');

$con=mysqli_connect('localhost','root', '');

mysqli_select_db($con,'account');

$name=$_POST['Fullname'];
$mail=$_POST['Email'];
$num=$_POST['phonenumber'];
$mess=$_POST['Message'];

$s="select * from user_info where name='$name'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
   echo"Username already taken";
  

}else{
    $reg="insert into usertable(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Successful Registration!";
}

?>