
<?php
ob_start();
$con=mysqli_connect('localhost','id8169023_akhilrautela','nopassword','id8169023_sp');



$name=$_POST['username'];
$pass=$_POST['password'];
if($name==""&&$password==""){
echo 'Please Enter Valid Credentials';
}
else{
$q="Insert into boss values('$name','$pass')";
$r=mysqli_query($con,$q);
if($r){
    ob_start();
header('Location:login.php');
 echo '<script>
  alert("Succesfully Registered");
 window.location.href="login.php";</script>';
}
else{
   echo "UNABLE TO CONNECT";
   die(mysqli_error($con));
}
}
?>