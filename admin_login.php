<html>
    <head>
        <title>Admin login page</title>
        <link rel="stylesheet" href="css/adminlogin.css">
    </head>

    <body>
        <div class="cont">
            <center><img src="admin.png"></center>
            <br><br><br><br>
            <form name="adminform" method="post" action="admin_process.php">
                <center>
                <div style="color: white; font-size: 18px;">
                Name &emsp;&ensp;<input type="text" name="username" placeholder="Enter your Username" style="width: 300px; height: 25px;">
                </div>
                <br><br>
                

                <div style="color: white; font-size: 18px;">
                Password &ensp;<input type="password" name="userpassword" placeholder="Enter your password" style="width: 300px; height: 25px;">
                </div>
                <br><br>

                <div class="submit">
                   <input type="submit" value="Sign in" name="save" style="width: 80px; height: 25px; ">
                </div>
            </center>
            </form>
        </div>
    </body>
</html>
