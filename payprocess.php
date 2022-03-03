<?php
include_once 'dbconn.php';
if(isset($_POST['save']))
{	 
	$nameoncard = $_POST['nameoncard'];
	$cvv = $_POST['cvv'];
	$cardnumber = $_POST['cardnumber'];
	$expire = $_POST['expire'];
	
	    if (empty($nameoncard)) 
		{
		die('Please enter your Card Name!');
		}
		
		if (empty($cvv)) 
		{
		die('CVV cannot be empty!');
		}
		
		if (empty($cardnumber)) 
		{
		die('Please enter your card Number!');
		}
		
		if (empty($expire)) 
		{
		die('You shold fill the Expire Date on Card!');
		}

	$sql = "INSERT INTO payment (nameoncard,cvv,cardnumber,expire)
	VALUES ('$nameoncard','$cvv','$cardnumber','$expire')";

	if (mysqli_query($conn, $sql)) 
    {
		echo "New record created successfully !";
		//header('LOCATION: http://stackoverflow.com');
	} 
     
	else 
    {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}

	mysqli_close($conn);
}
