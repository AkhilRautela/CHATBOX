<?php
session_start();
if(isset($_SESSION['username'])){
  unset($_SESSION['username']);
  session_destroy();
  header("location:login.php");}
  else
{
header("location:login.php");

}




?>