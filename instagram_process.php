<?php
include_once 'dbconn.php';
$email = $_POST['email'];  
$password = $_POST['password'];  

if (empty($email)) 
{
    die('Please enter your email!');

}
else if (empty($password)) 
{

    die('Please enter your Password!');
}
else
{
   // loging process 
   $email = stripcslashes($email);  
   $password = stripcslashes($password);  
   $email = mysqli_real_escape_string($conn, $email);  
   $password = mysqli_real_escape_string($conn, $password);  
 
   // checking username and password is correct or not
   $sql = "select * from instagram where email = '$email' and password= '$password'";  
   $result = mysqli_query($conn, $sql);  
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
   $count = mysqli_num_rows($result);  
     
   if($count == 1)
   {  
       echo "<h1><center> Login successful </center></h1>";  
       //header('Location: http://localhost/WEB/search.php');
   }  
   else{  
       echo "<h1> Login failed. Invalid username or password.</h1>";  
   }     

 }
?>