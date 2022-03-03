<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Payment Form </title>
    <link rel="stylesheet" href="css/payment.css">

    <!-- <style>
        .paybut {
            background-color: #04fd2581;
            border: none;
            color: white;
            padding: 12px 292px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
            font-size: 20px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .paybut1 {
            background-color: #04fd2581;
            color: white;
            /* border: 2px solid #04fd2581; */
        }

        .paybut1:hover {
            background-color: #C5B358;
            color: black;
        }
    </style> -->

    <script language="JavaScript" type="text/javascript">
        function validatetext() {
            // if(document.getElementById("nameoncard").value == 0)
            // {
            //     window.alert("Please enter the card holders name.");
            // }
            // if(document.getElementById("cvv").value.length < 4)
            // {
            //     window.alert("Please enter your CVV");
            // }
            // if(document.getElementById("cardnumber").value < 17)
            // {
            //     window.alert("Please enter your Card Number");
            // }

            let a = document.forms["payment"]["nameoncard"].value;
            let b = document.forms["payment"]["cvv"].value;
            let c = document.forms["payment"]["cardnumber"].value;
            let d = document.forms["payment"]["expire"].value;

            // validation for Owner's name 
            if (a == "") {
                alert("Name must be filled out");
                return false;
            } else if (!a.match(/^[A-Za-z]+$/)) {
                alert("Please enter letters only.");
                return false;
            }

            // validation for CVV 
            else if (b == "") {
                alert("CVV must be filled out");
                return false;
            }

            /*else if(b < 3 ||  b > 3)
            {
                alert("CVV number must have only 3 digits");
                return false;
            }*/
            else if (!b.match(/^\d+/)) {
                alert("Please only enter numeric characters");
                return false;
            }

            // validation for Card Number 
            else if (c == "") {
                alert("Card Number must be filled out");
                return false;
            }
            // else if( c < 16 && c > 16)
            // {
            //     alert("Card Number must have only 16 digits");
            //     return false;
            // }
            else if (!c.match(/^\d+/)) {
                alert("Please only enter numeric characters for Card Number");
                return false;
            }

            //validation for expire date
            if (d == "") {
                alert("Please enter the Expire Date");
                return false;
            }
        }
    </script>

</head>

<body>

    <!-- <img src="Card2.jpg" alt="payment" width="1000" height="1000"> -->

    <!-- <form name="payment" method="post" action="payment.php" onsubmit="return validatetext()"> -->
    <form name="payment" method="post" action="payprocess.php">
        <div class="container">


            <h1 class="font">Confirm Your Payment</h1>

            <br><br>

            <!-- Owner -->
            <div class="first-row">
                <div class="owner">
                    <h3 class="font">Name on Card</h3>
                    <div class="input-field">
                        <input name="nameoncard" value="" type="text" placeholder="A A John Walker">
                    </div>
                </div>

                <!-- CVV -->
                <div class="cvv">
                    <h3 class="font">CVV</h3>
                    <div class="input-field">
                        <input name="cvv" type="password" placeholder="XXX">
                    </div>
                </div>
            </div>

            <br><br>

            <!-- Card Number -->
            <div class="second-row">
                <div class="card-number">
                    <h3 class="font">Card Number</h3>
                    <div class="input-field">
                        <input name="cardnumber" type="text" placeholder="1111-2222-3333-4444">
                    </div>
                </div>
            </div>

            <br><br>


            <!-- Expire Date -->
            <div class="third-row">
                <div class="Expire Date">
                    <h3 class="font">Expire Date</h3>
                    <div class="input-field">
                        <input name="expire" type="text" placeholder="dd / mm / yy">
                    </div>
                </div>

                <!-- <div class="selection1"> -->

                <!-- <div class="date">
                        <select name="month" id="months" class="required">
                            <option value = "0" >month</option>
                            <option value = "1" >January</option>
                            <option value = "2" >February</option>
                            <option value = "3" >March</option>
                            <option value = "4" >April</option>
                            <option value = "5" >May</option>
                            <option value = "6" >June</option>
                            <option value = "7" >July</option>
                            <option value = "8" >August</option>
                            <option value = "9" >September</option>
                            <option value = "10" >Octomber</option>
                            <option value = "11" >Novenber</option>
                            <option value = "12" >December</option>
                        </select>
                    </div>
                &nbsp; &nbsp;
                    <div class="selection2">
                        
                        <select name="years" id="years">
                            <option value = "0" >year</option>
                            <option value = "1" > 2022 </option>
                            <option value = "2" > 2022 </option>
                            <option value = "3" > 2023 </option>
                            <option value = "4" > 2024 </option>
                            <option value = "5" > 2025</option>
                            <option value = "6" > 2026 </option>
                            <option value = "7" > 2027 </option>
                            <option value = "8" > 2028 </option>
                            <option value = "9" > 2029 </option>
                            <option value = "10" > 2030 </option>
                        </select>
                    
                    </div> -->

                <!-- Card Image -->
                <div style="padding-left: 200px;">
                    <img src="paypal.jpg" alt="" class="cards">
                </div>

                <!-- </div> -->
            </div>

            <center>
                <div>
                    <input type="submit" name="save" value="Pay Now" class="paybut paybut1" onclick="validatetext()">
                    <!-- <input type="button" name="paybutton" value="Pay Now" style="background-color:#C5B358; width: 150px; height: 26px;"> -->
                </div>
            </center>
            <!-- Confirm Button -->
            <!-- <a onclick="validatetext()" href=""> <b>Pay Now</b> </a> -->
        </div>
    </form>

</body>

</html>