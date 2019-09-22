<?php
session_start();
$con=mysqli_connect("localhost","id8169023_akhilrautela","nopassword","id8169023_sp");
$name=$_POST['username'];
$pass=$_POST['password'];
$q="Select * from boss where username='$name' and password='$pass'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r) >0){
$_SESSION['username']=$name;

header("location:welcome.php");
}
else{
header('location:register.php');
}


?>