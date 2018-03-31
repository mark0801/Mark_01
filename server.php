<?php
session_start();

// initializing variables
$fname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mark');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $user_password = mysqli_real_escape_string($db, $_POST['user_password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

  if (empty($fname)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($user_password)) { array_push($errors, "Password is required"); }
  if ($user_password != $confirm_password) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM register WHERE fname='$fname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['fname'] === $fname) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($user_password);//encrypt the password before saving in the database

  	$query = "INSERT INTO register (FName, Email, Password) 
  			  VALUES('$fname','$email','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
//LOGIN PART
if (isset($_POST['login_user'])) 
{
  $fname=mysqli_real_escape_string($db, $_POST['fname']);
 $password= mysqli_real_escape_string($db, $_POST['password']);

  if (empty($fname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE FName='$fname' AND Password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['fname'] = $fname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong Name/Password combination");
  	}
  }

}
?>