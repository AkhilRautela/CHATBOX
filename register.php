<!DOCTYPE HTML>
<html>
<head>
<style>
body{
background-image:url("2.jpg");
}
div{
text-align:center}
#container
{
background:lightblue;
margin-top:700px;
margin-left:200px;
margin:right:100px;
width:600px;
height:200px;}
</style>
<title>REGISTRATION</title>
</head>
<body>
<div id= "container">
<div>
<h1 style="font-size:50px;">REGISTRATION</h1>
</div>
<div>
<form method="POST" action="reg.php">
<label>USERNAME</label>
<input type="text" placeholder="username" name="username"><br>


<label style="margin-top:15px;">PASSWORD</label>
<input style="margin-top:15px;" type="password" placeholder="password" name="password"><br>

<input style="margin-top:10px; background-color:yellow;" type="submit" value="REGISTER">



</form>

</div>
</div>

</body>
</html>