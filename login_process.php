<?php
include_once 'dbconn.php';
 $username = $_POST['username'];  
 $password = $_POST['userpassword'];  

 if (empty($username)) {
	 die('Please enter your User Name!');

 }else if (empty($password)) {

	 die('Please enter your Password!');
  }else{
  
    // loging process 
	$username = stripcslashes($username);  
	$password = stripcslashes($password);  
	$username = mysqli_real_escape_string($conn, $username);  
	$password = mysqli_real_escape_string($conn, $password);  
  
	// checking username and password is correct or not
	$sql = "select *from login where username = '$username' and userpassword= '$password'";  
	$result = mysqli_query($conn, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);  
	  
	if($count == 1)
	{  
		echo "<h1><center> Login successful </center></h1>";  
		// header('Location: http://localhost/WEB/payment_form.php');
	}  
	else{  
		echo "<h1> Login failed. Invalid username or password.</h1>";  
	}     

  }


/*if(isset($_POST['save']))
{	 
	$User_Name = $_POST['username'];
	$Password = $_POST['userpassword'];
	
	    if (empty($User_Name)) 
		{
			die('Please enter your User Name!');
		}
		
		if (empty($Password)) 
		{
			die('Please enter your Password!');
		}

	$sql = "INSERT INTO login (username,userpassword)
	VALUES ('$User_Name','$Password')";

	if (mysqli_query($conn, $sql)) 
    {
		echo "New record created successfully !";
		// header('Location: http://localhost/WEB/creatAcc_form.php');
	} 
     
	else 
    {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}

	mysqli_close($conn);
}*/

?>
