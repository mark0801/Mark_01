
<?php include('server2.php'); ?> 
  <html>
  
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
  width:50%;
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
  <div style="height:6% "><b style="font-family:Rockwell;font-size:25px"><a href="index.php" style="text-decoration:none;color:#F2400B">&nbsp;&nbsp;Be-Me-Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="stores" style="text-decoration:none;color:#F2400B">  | </a>
    
    <a href="index.php" style="text-decoration:none;color:#F2400B">  HOME | </a>
    <a href="aboutus.html"  style="float:none;text-decoration:none;color:#F2400B">   </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>

<?php if (isset($_SESSION['fname'])) : ?>
<center><p style="color:red;font-family:Rockwell;font-size:20px">WELCOME <?php echo $_SESSION['fname']; ?>!!!  </center>	
<?php if (isset($_SESSION['success'])) : ?>
		  <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3> </a><center><?php endif ?>
 <center><a href="index.php?logout='1'" style="color:red;font-family:Rockwell;font-size:20px;text-decoration:none">LOGOUT</a> 
   </center> <?php endif ?></div>
  
  
  
  <center>
<aside id="sidebar">  <div class="dark">
            <h3> Customer Support</h3>
          
		  <form name="my_form" class="quote" >
  						
  							<label>First Name<b style="color:red">&nbsp;*</b></label><br>
  							<input type="text" name="first_name" size="20" placeholder="First Name">  
							<br>
							<label>Last Name<b style="color:red">&nbsp;*</b></label><br>
  							<input type="text" name="last_name" size="20" placeholder="Last Name">
							<br>			
				<label>Response<b style="color:red">&nbsp;*</b></label><br><textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter your Response">
				
                   </textarea><br><br>
				   <input type="button" class="button_1" value="Submit" name="response" style="font-family:Rockwell;font-size:20px;color:white;background-color:black" > 
					
				   					</form>
        </div></aside></center>
		<br>
<br><br><br><br>
		
		<div><table border="0"><tr><th style="background-color:#F2400B">All Rights Reserved.Copyright   &copy;  Be-Me-Me  FoodWorks Ltd<br>
<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<a href="http://www.twitter.com" class="fa fa-twitter"></a>
<a href="http://www.google.com" class="fa fa-google"></a>
</th></tr></table></div>

				   </body>
				   


</html>