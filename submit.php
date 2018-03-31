<html>
<head>

<link href="design.css" rel="stylesheet" type="text/css">
<title>Submission</title>


<div class="confirm">

<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

//Use this database
mysqli_select_db($conn,"mark");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$loc = $_POST['loc'];


$sql= "INSERT INTO phonebook (First_Name,Last_Name,Contact,Email,Location) VALUES ('$fname','$lname','$contact','$email','$loc');";





	
if (mysqli_query($conn, $sql)) {

echo "Created successfully";
 
 }
 else
	 
	 {
		 
		 echo"Entry already exists";
		 
		 
		 
	 }


?>
	 
	 
	 
	 

</div>

<br><br>



<br>
<a href="mainpage.php">Go Back To Enter New Data  </a><br><br><br>
<a href="database.php">Check the Database </a>
</body>
</html>