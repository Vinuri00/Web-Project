<?php
include_once 'dbconn.php';
if(isset($_POST['save']))
{	 
	$Name = $_POST['uname'];
    $Contact_Number = $_POST['contactnum'];
	$Province = $_POST['province'];
	$District = $_POST['distric'];
    $Address = $_POST['uaddress'];
	$Gift_Name = $_POST['giftname'];
    $Email_Address = $_POST['email'];
    $Purpose = $_POST['purpose'];

    if (empty($Name)) 
		{
			die('Please enter your Name!');
		}
		
		if (empty($Contact_Number)) 
		{
			die('Contact Number must be filled!');
		}
		
		if (empty($Province)) 
		{
			die('Please enter your province!');
		}
		
		if (empty($District)) 
		{
			die('Enter your district!');
		}
        if (empty($Address)) 
		{
			die('Please enter your Address!');
		}
		
		if (empty($Gift_Name)) 
		{
			die('Fill your Gift Name!');
		}
		
		if (empty($Email_Address)) 
		{
			die('Email should not be empty!');
		}
		
		if (empty($Purpose)) 
		{
			die('Enter your purpose for our reference!');
		}

        $sql = "INSERT INTO order (uname,contactnum,province,distric,uaddress,giftname,email,purpose)
	 VALUES ('$Name','$Contact_Number','$Province','$District','$Address','$Gift_Name','$Email_Address')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  
}
?>