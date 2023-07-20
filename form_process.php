<?php
session_start();


$con=mysqli_connect('localhost','root', '');

mysqli_select_db($con,'Hospital');

$email=$_POST['Email'];
$message=$_POST['Message'];

$s="select * from data where Email='$email'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['Email'] = $email;
  header('location:Hospital.php');
  

}else{
   header('location:fine.php');
}

?>