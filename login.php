<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>



 body{
  
  background-image:url(12278.jpg);
  background-repeat:no-repeat;
  background-size;cover;
background-position:center;
background-color:#2E4053;  
width:100%;
  }
  .dark{
  padding:15px;
  color:#ffffff;
  font-family:Rockwell;
  margin-top:30px;
  margin-bottom:10px;
}
.quote button{
    display:block;
    width:50%;
  }
 #sidebar {
  width:20%;
  padding:5px;
  margin-top:120px;

  background:rgba(0,0,0,0.5);
}

	table{ color:white;
	font-family:Rockwell;
	height:10%;
	width:100%;}

	a{
color:white;}

	
</style>












<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css">
</head>
<body>
<div style="height:6% "><b style="font-family:Rockwell;font-size:25px"><a href="home.html" style="text-decoration:none;color:#F2400B">&nbsp;&nbsp;Be-Me-Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.html" style="text-decoration:none;color:#F2400B">  | </a>
    
    <a href="home.html" style="text-decoration:none;color:#F2400B">  HOME | </a>
    <a href="aboutus.html"  style="float:none;text-decoration:none;color:#F2400B">   </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
</div>

  <center>
<aside id="sidebar">  <div class="dark">

  	<h2>Login</h2>
  
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  		<label>Name</label>
		<br>
  		<input type="text" name="fname" >
 
  	
  		<label>Password</label>
		<br>
  		<input type="password" name="password">
  	
  	
	<br><br>
  		<button type="submit" class="btn" name="login_user" style="font-family:Rockwell;font-size:20px;color:white;background-color:black">Login</button>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	</div></aside></center>
  </form><br><br><br><br><Br>
  	<div><table border="0"><tr><th style="background-color:#F2400B">All Rights Reserved.Copyright   &copy;  Be-Me-Me  FoodWorks Ltd<br>
<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<a href="http://www.twitter.com" class="fa fa-twitter"></a>
<a href="http://www.google.com" class="fa fa-google"></a>
</th></tr></table></div>

	
</body>
</html>