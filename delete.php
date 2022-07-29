<?php
include_once 'dbconn.php';
$sql = "DELETE FROM image WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) 
{
    echo "Image deleted successfully";
} 
else 
{
    echo "Error deleting image: " . mysqli_error($conn);
}
mysqli_close($conn);
?>