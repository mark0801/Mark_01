  <html>
 <title>Register</title>
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<?php include('server.php') ?>

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
  
  
  
  <body>
  <div style="height:6% "><b style="font-family:Rockwell;font-size:25px"><a href="home.html" style="text-decoration:none;color:#F2400B">&nbsp;&nbsp;Be-Me-Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="stores" style="text-decoration:none;color:#F2400B">  | </a>
    
    <a href="home.html" style="text-decoration:none;color:#F2400B">  HOME | </a>
    <a href="aboutus.html"  style="float:none;text-decoration:none;color:#F2400B">   </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
</div>

  
  
  
  <center>
<aside id="sidebar">  <div class="dark">
            <h3> Register</h3><br>
           <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  						
  							<label > Name<b style="color:red">&nbsp;*</b></label><br>
  							<input type="text"  name="fname" id="#fname" size="20" placeholder="Name" value="<?php echo $fname; ?>" >  
							<br>
							
							<label>Password  <b style="color:red">&nbsp;*</b></label>
							<br>
							<input type="password" name="user_password"  placeholder="Create your password" >
							<br>
							

							<label>Confirm Password  <b style="color:red">&nbsp;*</b></label>
							<br>
							<input type="password" name="confirm_password"  placeholder="Confirm your password">				
							
							
							
							<br>
							
							
<label>Email <b style="color:red">&nbsp;*</b></label><br>
														
							<input type="email"  name="email" id="#email" placeholder="Enter Email...">
  						    <br>
							<p>
  		Already a member? <a href="login.php" >Sign in</a>
  	</p>
							
							<br>
  						 
					
					
					
					<button type="submit" class="button_1" name="reg_user" style="font-family:Rockwell;font-size:20px;color:white;background-color:black">SUBMIT</button>
        </div></aside></center>
</form>	
	<br>
		
		
		<div><table border="0"><tr><th style="background-color:#F2400B">All Rights Reserved.Copyright   &copy;  Be-Me-Me  FoodWorks Ltd<br>
<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<a href="http://www.twitter.com" class="fa fa-twitter"></a>
<a href="http://www.google.com" class="fa fa-google"></a>
</th></tr></table></div>

		</body>
		
		<script type="text/javascript">  
  
/*function M(){  
if(!document.my_form.first_name.value)
{ alert('You need to supply your first name ');
document.my_form.first_name.focus();
return false;  
}

else if(!document.my_form.last_name.value)
{ alert('You need to supply your last name ');
document.my_form.last_name.focus();
return false;  
}  
else
 location.href="show.php";

}
 */
  </script>
		
		
		</html>