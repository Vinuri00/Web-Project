<?php
include_once 'dbconn.php';


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($conn,"select * from image");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="250" width="250"/>';
   echo "<br>";

?>
   
   <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php

   echo "</td>";
   } 
   echo "</tr>";
   
   echo "</table>";
  }
?>