<!doctype html>
<html>
<head>

<title>Phone Book</title>

<link href="design.css" rel="stylesheet" type="text/css">

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
	
if ($conn->connect_error) 
{
 die("Connection has failed: " . $conn->connect_error);

 }
else
{
	
	echo"<h2>Connection is Successful</h2>";

	}
	

mysqli_select_db($conn,"phonebook");
			
?>
</head>

<body>

<div class="header" id="#header">
	<h1>Phonebook</h1>
</div>

<div class="entry" id="#entry">
	<form action="submit.php" method="post" id="#details">
		<table cellspacing="5px">
			<tr>
				<td>
					First Name
				</td>
				<td>
					<input type="text" name="fname" value="" id="#fname">
				</td>
			</tr>
			<tr>
				<td>
					Last Name
				</td>
				<td>
					<input type="text" name="lname" value="" id="#lname">
				</td>
			</tr>
			<tr>
				<td>
					Contact
				</td>
				<td>
					<input type="contact" name="contact" value="" id="#contact">
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="email" name="email" value="" id="#email">
				</td>
			</tr>
			<tr>
				<td>
					Location
				</td>
				<td>
					<input type="text" name="loc" value="" id="#loc">
				</td>
			</tr>
			
		</table>
	</form>
	
</div>

<div class="postform" id="#postform">
<br><br>
	<button type="submit" form="#details" id="button" value="Submit">Submit</button>
	
</div>
	
</body>
</html>