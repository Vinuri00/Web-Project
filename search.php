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
          <table class="table table-dark table-bordered">
            <thead>
              <tr> 
                <th>Name on Card</th>
                <th>CVV</th>
                <th>Card Number</th>
                <th>Expire Date</th>
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