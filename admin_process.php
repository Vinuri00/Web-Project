<?php
include_once 'dbconn.php';
 $username = $_POST['username'];  
 $password = $_POST['userpassword'];  

 if (empty($username)) {
	 die('Please enter Admin User Name!');

 }else if (empty($password)) {

	 die('Please enter Admin Password!');
  }else{
  
    // loging process 
	$username = stripcslashes($username);  
	$password = stripcslashes($password);  
	$username = mysqli_real_escape_string($conn, $username);  
	$password = mysqli_real_escape_string($conn, $password);  
  
	// checking username and password is correct or not
	$sql = "select * from admin where username = '$username' and userpassword= '$password'";  
	$result = mysqli_query($conn, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);  
	  
	if($count == 1)
	{  
		// echo "<h1><center> Login successful </center></h1>";  
		header('Location: http://localhost/WEB/search.php');
	}  
	else{  
		echo "<h1> Login failed. Invalid username or password.</h1>";  
	}     

  }
?>