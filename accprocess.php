<?php
include_once 'dbconn.php';
if(isset($_POST['save']))
{	 
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
    $pword = $_POST['pword'];
	$confirmpword = $_POST['confirmpword'];

    if ($_POST["pword"] === $_POST["confirmpword"]) {
        // echo "success!";
        $sql = "INSERT INTO register (fname,lname,email,uname,pword,confirmpword)
	VALUES ('$fname','$lname','$email','$uname','$pword','$confirmpword')";


	if (mysqli_query($conn, $sql)) 
    {
		echo "New record created successfully !";
	} 
     
    else 
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}

	 mysqli_close($conn);
}

    else 
	{
        // failed :(
        echo "your password is not matching. Please check your password!";
    }

	// $sql = "INSERT INTO register (fname,lname,email,uname,pword,confirmpword)
	// VALUES ('$fname','$lname','$email','$uname','$pword','$confirmpword')";


	// if (mysqli_query($conn, $sql)) 
    // {
	// 	echo "New record created successfully !";
	// } 
     
    // else {
	// 	echo "Error: " . $sql . "" . mysqli_error($conn);
	// }

	//  mysqli_close($conn);
}
?>