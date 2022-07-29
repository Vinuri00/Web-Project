<html>

<head>
    <title>
        Register Form
    </title>
    <link rel="stylesheet" href="css/createacc.css">

</head>

<body>
    <div style="padding-top: 30px; ">
        <center>
            <div id="frame">

                <h1 class="reg">
                    Create New Account
                </h1>
                <form name="myform" method="post" action="accprocess.php">
                    <!-- <form method="post" action="accprocess.php">    -->
                    <table width="400" height="400">

                        <tr>
                            <td>
                                <div class="frm">First Name </div>
                            </td>
                            <td><input type="text" name="fname" style="width: 250px;" required></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="frm">Last Name </div>
                            </td>
                            <td><input type="text" name="lname" style="width: 250px;" required></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="frm">Email </div>
                            </td>
                            <td><input type="text" name="email" style="width: 250px;" required></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="frm">User Name </div>
                            </td>
                            <td><input type="text" name="uname" style="width: 250px;" required></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="frm">Password </div>
                            </td>
                            <td><input type="password" name="pword" style="width: 250px;" required></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="frm">Confirm Password </div>
                            </td>
                            <td><input type="password" name="confirmpword" style="width: 250px;" required></td>
                        </tr>


                    </table>

                    <br>
                    <input type="radio" name="g" value="j">I accept the <b> Terms of Use </b> & <b>Privacy Policy</b>.

                    <br><br>
                    <td>
                        <input type="submit" name="save" value="Register Now" style="background-color: #C5B358; width:150px; height:26px;">
                    </td>

            </div>
            </form>
        </center>
    </div>
    <center>
        <p>Already have an account ?
            <!-- <u>sign in</u></p> -->
            <a href="http://localhost/WEB/login_form.php"> sign in
    </center>
</body>

</html>