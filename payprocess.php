<?php
include_once 'dbconn.php';
if(isset($_POST['save']))
{	 
	$date = $_POST['udate'];
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

	$sql = "INSERT INTO payment (udate,nameoncard,cvv,cardnumber,expire)
	VALUES ('$date','$nameoncard','$cvv','$cardnumber','$expire')";

	if (mysqli_query($conn, $sql)) 
    {
		// echo "New record created successfully !";
		header('Location: http://localhost/WEB/paydetails.php');
	} 
     
	else 
    {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

