<style>
.back
{

background-size:cover;


}


body{
	background-color:black;
background-image:url(dark.jpg);
	}


.menu
{
max-width:900px;
max-height:500px;
margin: 0 auto;
width:170px;
height:140px;
padding:100px;
float:left;
}

.store
{
max-width:900px;
max-height:500px;
margin: 0 auto;
width:170px;
height:140px;
padding:100px;
float:right;


}


.button {
    background-color: #282A2D  ;
    border: none;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

	a
	{
	
	color:white;
	}


	table{ 
	font-family:Rockwell;
	height:10%;
	width:100%;}
	
</style>



<?php 
  session_start(); 

  if (!isset($_SESSION['fname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fname']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="header">

<div style="background-image:url(dark.jpg);height:20% "><b style="font-family:Rockwell;"><a style="text-decoration:none;color:white;font-size:35px">&nbsp;&nbsp;Be-Me-Me</a> <?php  if (isset($_SESSION['fname'])) : ?>
<center>   	<p style="color:white;font-size:20px">WELCOME <?php echo $_SESSION['fname']; ?>!!!  	
	
            	<?php if (isset($_SESSION['success'])) : ?>

		  <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3></p>
		</center>
      </div>
  	<center><?php endif ?><br>
 <a href="index.php?logout='1'" style="color:red;text-transform:capitalize;text-decoration:none;font-size:20px;">LOGOUT</a> 
    <?php endif ?>
</a></center>

</div>
<div class="back">
<img src="home.jpg" style="margin-top:1px">
</div>
<center>
<div class="menu" style="background-image:url(dark.jpg)"><b style="color:white;font-size:30px">-Our<br>&nbsp;&nbsp;MENU-<br><br>
<a href="newmenu.php"><img src="menu.gif"></a></div>
<div class="store" style="background-image:url(dark.jpg)">- Your&nbsp;&nbsp;&nbsp; NEAREST&nbsp; STORE -<br><a href="nearest.html" class="button">Find now</a></b>
</div>

</center><br>
<div><table border="0"><tr><th style="background-color:#F2400B">All Rights Reserved.Copyright   &copy;  Be-Me-Me  FoodWorks Ltd<br>
<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<a href="http://www.twitter.com" class="fa fa-twitter"></a>
<a href="http://www.google.com" class="fa fa-google"></a>

</th></tr></table></div>
<center>
<div><table id="t1" border="0" style="height:5%;width:30%"><tr><th style="background-color:#F2400B;"><a href="response.php" style="text-decoration:none;font-size:15px">CUSTOMER SUPPORT</a> </div>
</th></tr></table>
</center>

		
</body>
</html>