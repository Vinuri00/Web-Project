<?php
include_once 'dbconn.php';
if(isset($_POST['save']))
{	 
    $name = $_POST['username'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone'];
	$message = $_POST['msg'];
	
	    if (empty($name)) 
		{
			die('Please enter your Name!');
		}
		
		if (empty($email)) 
		{
			die('Please enter your email!');
		}
		
		if (empty($phone_number)) 
		{
			die('Please enter your phone Number!');
		}
		
		if (empty($message)) 
		{
			die('You shold keep a message!');
		}

	$sql = "INSERT INTO contact_us (username,email,phone,msg)
	VALUES ('$name','$email','$phone_number','$message')";

	if (mysqli_query($conn, $sql)) 
    {
		echo "Thank You !!!!";
		// header('Location: http://localhost/WEB/paydetails.php');
	} 
     
	else 
    {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

