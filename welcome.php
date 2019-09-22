<html>
<head>
<title>WELCOME</title>
<style>
body{
background:brown;}
.div{
color:white;
text-align:center;}
#chatbox{
height:1000px;
width:700px;
margin-top:150px;
margin-right:0px;
margin-left:150px;
background:lightblue;
padding-left:10px;
border:2px solid white;
overflow:auto;
}
#message{
background:green;
margin-left:150px;
height:60px;
width:710px;
border:2px solid green;}

</style>
</head>
<body>
<div class="div"><h1>Welcome TO CHATBOX<h1></div>
<div class="div"><h2>OPEN Up yOuR HEArt<h2></div><div>

<?php
session_start();
echo '<h3 style="margin-left:380px;color:white">WELCOME  '.$_SESSION['username'].'<h3>';

?>

</div>
<div id="chatbox">
<?php
session_start();
if(isset($_SESSION['username'])){
if(isset($_POST['submi'])){
$message=$_POST['message'];
$username=$_SESSION['username'];

$con=mysqli_connect('localhost','id8169023_akhilrautela','nopassword','id8169023_sp');
$q="insert into message values ('$message','$username')";
mysqli_query($con,$q);
}}
else{
echo '<script>window.location="login.php";</script>';
}
?>
<?php
$conn=mysqli_connect('localhost','id8169023_akhilrautela','nopassword','id8169023_sp');
$q1= "select * from message";
$r=mysqli_query($conn,$q1);
while($row=mysqli_fetch_assoc($r)){
$message=$row['message'];
$username=$row['username'];
echo '<h1 style="color:blue;">'.$username.'</h1>';
echo $message;
echo '<hr>';
}


?>
</div>
<form autocomplete="off" method="POST">
<div id="message">
<input style="width:600px;
height:60px; padding-left:5px;" type="text" name="message" placeholder=" TyPe YoUr mEssAge" >
<input type="submit" name="submi" value="SEND" style="float:right;
width:110px;
height:60px;
padding-left:0px;">
</div>

</form>
<div>
<a href="logout.php" style="background:yellow;
margin-left:500px;
margin-top:30px;">logout</a>

</div>
</body>
</html>