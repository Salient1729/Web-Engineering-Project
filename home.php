<?php

require_once "config.php";

?>



<!DOCTYPE html>
<html>

<head>
<style>
body {
	background-image: url("image.jpg");
}
#button1{
width: 80px;
height: 40px;
background-color:white;
display:block;
margin-left: 45%;
margin-top: 10%;
color: #000000;
font-weight: bold;


}
#button2{
width: 80px;
height: 40px;
background-color:white;
display:block;
margin-left: 45%;
margin-top: 10%;
color: #000000;
font-weight: bold;
}

</style>
<title>Review Book Better/Home</title>
</head>

<body>
<h1 style="color:black;text-align:center;">Review Book Better</h1>



<form action="http://localhost/Project/registration.php" method="post">
<input type="submit" id="button1" value="Register">
</form>

<form action="http://localhost/Project/login.php" method="post">
<input type="submit" id="button2" value="Login">
</form>

</body>
</html>