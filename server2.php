

<?php
session_start();

// initializing variables
$first_name = "";
$last_name= "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mark');

//LOGIN PART
if (isset($_POST['response'])) 
{
  $first_name=mysqli_real_escape_string($db, $_POST['first_name']);
  
  $last_name=mysqli_real_escape_string($db, $_POST['last_name']);
  
  $comment=mysqli_real_escape_string($db, $_POST['comment']);
  
  if (empty($first_name)) {
  	array_push($errors, "First Name is required");
  }
  if (empty($last_name)) {
  	array_push($errors, "Last Name is required");
  }
  
  if (empty($comment)) {
  	array_push($errors, "Response de Dude");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM response WHERE FNAME='$first_name' AND LName='$last_name'  AND Response='$comment'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['first_name'] = $first_name;
  	  $_SESSION['success'] ="Thanks for your response";
  	  header('location: home.html');
  	}else {
  		array_push($errors, "You've got no Swag");
  	}
  }

}
?>