<!--Addding Internal PHP code -->
<?php

include "dbconn.php";

$query="SELECT * FROM payment";
$result=mysqli_query($conn, $query);
?>

<html>
  <head>
    <title>Retrieve data from Database</title>
    <link rel="stylesheet" href="css/search.css">

  </head>
  <body>
    <center>
    <div class="search-container">
      <div class="row1">
        <div class="col-es-12">

        <h1 class="text-center">Confirmation of your Payment<h1>
          <br>
          <table class="table table-dark table-bordered" width="900" height="500">
            <thead>
              <tr> 
                <td><b>Name on Card</b></td>
                <td><b>CVV</b></td>
                <td><b>Card Number</b></td>
                <td><b>Expire Date</b></td>
              </tr>
            </thead>

            <tbody>
              
              <?php
              foreach ($result as $row1)
              {

              ?>
              <tr>
                <td><?php echo $row1['nameoncard'];?></td>
                <td><?php echo $row1['cvv'];?></td>
                <td><?php echo $row1['cardnumber'];?></td>
                <td><?php echo $row1['expire'];?></td>
              </tr>
              <?php

              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </center>
  </body>
</html>