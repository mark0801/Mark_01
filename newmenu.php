<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#showcase{
  min-height:600px;
  background:url('image.jpg') no-repeat  0 ;
  background-size:cover;
  font-family:Rockwell;
  font-size:40px;
 text-align:right;
  color:White;

}

.container{
  width:80%;
  margin:auto;
  overflow:hidden;

  }

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:300px;
}

	table{ color:white;
	font-family:Rockwell;
	height:10%;
	width:100%;}

a{
color:white;}

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





<body >
<div style="height:6% "><b style="font-family:Rockwell;font-size:25px"><a href="home.html" style="text-decoration:none;color:#F11D40">&nbsp;&nbsp;Be-Me-Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="text-decoration:none;color:#F11D40">  HOME | </a>
    
    <a href="order.html" style="text-decoration:none;color:#F11D40">  ORDER | </a>
    <a href="aboutus.html"  style="float:none;text-decoration:none;color:#F11D40">  ABOUT US  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
	
	
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
<br>
<section id="showcase">
      <div class="container">
        <h1>&nbsp;&nbsp;     ARE YOU HUNGRY ?<br>&nbsp;&nbsp;Don't Wait!!!<br>Check our Menu</h1>
        <p></p>
      </div>
    </section><br>
	
<center><b style="font-family:Rockwell;font-size:30px;"> OUR MENU</b>
	</center>
	<br>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="Chicken_Golden_Delight.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40">Chicken Golden Delight </p>
		  <p><input type="button" value="ORDER NOW @249" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>
          <div class="box1" id="decrease1" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number1" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%" value="0" />
  <div class="box1" id="increase1" onclick="increaseValue()" value="Increase Value">+</div>
          
		</div>
        <div class="box">
          <img src="Chicken_Sausage.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40">Chicken Sausage</p>
           <p><input type="button" value="ORDER NOW @199" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>
           <div class="box2" id="decrease2" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number2" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%" value="0" />
  <div class="box2" id="increase2" onclick="increaseValue()" value="Increase Value">+</div>
           
           
		</div>
        <div class="box">
          <img src="Chicken_Tikka.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40">Chicken Tikka</p>
           <p><input type="button" value="ORDER NOW @249" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>
           <div class="box3" id="decrease3" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number3" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%" value="0" />
  <div class="box3" id="increase3" onclick="increaseValue()" value="Increase Value">+</div>
		</div>
      </div>
    </section><br>
	 <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="Farmhouse.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40"> Farmhouse</p>
          <p><input type="button" value="ORDER NOW @199" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>
          <div class="box4" id="decrease4" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number4" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%" value="0" />
  <div class="value-button" id="increase4" onclick="increaseValue()" value="Increase Value">+</div>
		 </div>
        <div class="box">
          <img src="Mexican_Green_Wave.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40">Mexican Green Wave</p>
        <p><input type="button" value="ORDER NOW @299" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>
        <div class="box5" id="decrease2" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number5"  style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%" value="0" />
  <div class="box5" id="increase5" onclick="increaseValue()" value="Increase Value">+</div>
           
		</div>
        <div class="box">
          <img src="Peppy_Paneer.jpg">
          <p style="font-family:Rockwell;font-size:20px;color:#F11D40"> Peppy Paneer</p>
            <p><input type="button" value="ORDER NOW 129" style="font-family:Rockwell;font-size:20px;border-radius:8px;background-color:#F11D40;color:white;padding:20px"></p>  
            <div class="box6" id="decrease6" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number6" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:15%"value="0" />
  <div class="box6" id="increase6" onclick="increaseValue()" value="Increase Value">+</div>
	   </div>
      </div>
    </section>
<br> 
<center><b style="font-family:Rockwell;font-size:20px">AMOUNT</b></center><br><center><input type="text" onclick="number() "id="lala1" style="font-family:rockwell;font-size:20px;border-radius:8px;height:6%;width:8%" /><br><br>
<br><a href="popup.html" style="background-color:#F11D40;font-family:rockwell;text-decoration:none;border-radius:8px;padding:20px;color:white"> PAY NOW</a></center>
<br><br>



<div><table border="0"><tr><th style="background-color:#F2400B">All Rights Reserved.Copyright   &copy;  Be-Me-Me  FoodWorks Ltd<br>
<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<a href="http://www.twitter.com" class="fa fa-twitter"></a>
<a href="http://www.google.com" class="fa fa-google"></a>
</th></tr></table></div>
 <script>
function increaseValue() {
	var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 0);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
function number()
{
 var num1 = parseInt(document.getElementById('number1').value);
 var num2 = parseInt(document.getElementById('number2').value);
 var num3 = parseInt(document.getElementById('number3').value);
 var num4 = parseInt(document.getElementById('number4').value);
 var num5 = parseInt(document.getElementById('number5').value);
 var num6 = parseInt(document.getElementById('number6').value);
 var tnum = (num1*249) + (num2*199) + (num3*249) + (num4*199) + (num5*299) + (num6*129) ;
 document.getElementById('lala1').value = tnum;
 }
 
</script>


	
	
	</body>




</html>