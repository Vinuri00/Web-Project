<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Responsive Login Page</title>
    <link rel="stylesheet" href="css/loginForm.css">

</head>

<body>

    <section>
        <div class="imgBx">
            <img src="a.jpg" height="760" width="750">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <br>
                <form name="login form" method="post" action="login_process.php">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="userpassword">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="save">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account?</p>
                    </div>

                </form>

                <a href="http://localhost/WEB/creatAcc_form.php">Create an Account</a>


                <h3>Login with social media </h3>
                <ul class="sci">
                        <li><a href="http://localhost/WEB/fb_login.php"><img src="facebook.jpg" height="40" width="40"></a></li>
                        <li><a href="http://localhost/WEB/twitter_form.php"><img src="teitter.jpg" height="40" width="40"></a></li>
                        <li><a href="http://localhost/WEB/instagram_form.php?#"><img src="instagran.jpg" height="40" width="40"></a></li>
                    </ul>

            </div>
    </section>
</body>