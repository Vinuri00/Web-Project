<?php
$servername='localhost';
$username='Vinuri';
$password='12345';
$dbname = "web_project";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
   die('Could not Connect My Sql:' .mysqli_connect_error());
}

?>