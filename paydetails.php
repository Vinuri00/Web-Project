<html>

<head>
    <title>Pay Details</title>
    <link rel="stylesheet" href="css/paydetails.css">
</head>

<center>

    <body>
        <img src="success1.gif" height="400" weight="500">

        <div class="details">
            <h1>Your payment has successfuly done.</h1>

            <br>
        
        <?php
            include_once 'dbconn.php';
            if (isset($_POST['save'])) {
                $nameoncard = $_POST['nameoncard'];
                $cvv = $_POST['cvv'];
                $cardnumber = $_POST['cardnumber'];
                $expire = $_POST['expire'];

                if (empty($nameoncard)) {
                    // die('Please enter your Card Name!');
                    header('Location: http://localhost/WEB/error_nameoncard.php');
                }

                else if (empty($cvv)) {
                    // die('CVV cannot be empty!');
                    header('Location: http://localhost/WEB/error_cvv.php');
                }

                else if (empty($cardnumber)) {
                    // die('Enter your Card Number!');
                    header('Location: http://localhost/WEB/error_cardnumber.php');
                }

                else if (empty($expire)) {
                    // die('You shold fill the Expire Date on Card!');
                    header('Location: http://localhost/WEB/error_expire.php');
                }

                else
                {

                $sql = "INSERT INTO payment (nameoncard,cvv,cardnumber,expire)
                VALUES ('$nameoncard','$cvv','$cardnumber','$expire')";

                if (mysqli_query($conn, $sql)) {
                    // echo "New record created successfully !";

                    echo "<br>";
                    // header('Location: http://localhost/WEB/search.php');
                } else {
                    echo "Error: " . $sql . " " . mysqli_error($conn);
                }

                mysqli_close($conn);

                echo "Name on Card: ";
                echo $nameoncard;
                echo "<br>";
    
                echo "CVV: ";
                echo $cvv;
                echo "<br>";
    
                echo "Card Number: ";
                echo $cardnumber;
                echo "<br>";
    
                echo "Expire Date: ";
                echo $expire;
                echo "<br>";
                }
            }
            ?>

        </div>
    </body>
</center>

</html>